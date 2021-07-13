<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use App\Tag;

use Auth;

use Illuminate\Http\Request;

class PostController extends Controller
{

    //  public function __construct()
    //{
    //  $this->middleware('auth');
    // }


    //<div class="d-flex justify-content-center">
    // {!! $posts->links() !!}
    //</div>

    public function index()
    {
        $posts = post::where('approved', true)->orderBy('created_at', 'DESC')->get();
        // $posts = post::paginate(2);
        // ,compact('posts')
        return view('posts.index')->with('posts', $posts);
    }
    public function index1()
    {
        $posts = post::orderBy('created_at', 'DESC')->get();
        return view('welcome')->with('posts', $posts);
    }

    public function arab()
    {

        return view('posts.arab');
    }

    public function index2()
    {

        return view('posts.index1');
    }

public function approve(Post $post)
{
    $post->approved = true;
    $post->save();
    return redirect()->back();
}
    public function postsTrashed()
    {
        $posts = post::onlyTrashed()->where('user_id', Auth::id())->get();
        return view('posts.trashed')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>  'required',
            'content' =>  'required',

            'photo' =>  'required|image',
        ]);

        $photo = $request->photo;
        $newPhoto = time() . $photo->getClientOriginalName();
        $photo->move('uploads/posts', $newPhoto);

        $post = post::create([
            'user_id' =>  Auth::id(),
            'title' =>  $request->title,
            'content' =>   $request->content,
            'photo' =>  'uploads/posts/' . $newPhoto,
            'slug' =>   str_slug($request->title),
        ]);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = post::where('slug', $slug)->first();
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = post::find($id);
        $this->validate($request, [
            'title' =>  'required',
            'content' =>  'required'
        ]);

        //   dd($request->all());

        if ($request->has('photo')) {
            $photo = $request->photo;
            $newPhoto = time() . $photo->getClientOriginalName();
            $photo->move('uploads/posts', $newPhoto);
            $post->photo = 'uploads/posts/' . $newPhoto;
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete($id);
        return redirect()->back();
    }

    public function hdelete($id)
    {
        $post = Post::withTrashed()->where('id',  $id)->first();
        $post->forceDelete();
        return redirect()->back();
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id',  $id)->first();
        $post->restore();
        return redirect()->back();
    }

    public function search()
    {
        return view('contact');
    }

    public function search1()
    {
        return view('staff');
    }

    public function search2(Request $request)
    {
        $search = $request->get('search');
        $posts = post::where('title', 'Like', '%' . $search . '%')->get();
        $posts = post::where('content', 'Like', '%' . $search . '%')->get();
        return view('posts.index', ['posts' => $posts]);
    }
    public function admin()
    {
        return view('admin')->with(
            'posts',
            Post::where('approved', false)->get()
        );
    }
}
