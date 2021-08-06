<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;


class ApiPostController extends Controller
{
    public function getAllPosts()
    {
        return post::where('approved', '=', true)->get();
    }

    public function getAdminPosts()
    {
        if (auth()->user()->is_admin)
            return post::where('approved', '=', false)->get();
        return abort(403);
    }
    
    public function adminApprovePost(Post $post, Request $request)
    {
        if ($post == null)
            return abort(404, 'post not found');

        $post->approved = true;
        $post->save();
        return response('post approved successfully');
    }


    public function store(Request $request)
    {
        $post = new post();
        $post->title = $request->title;
        $post->user_id = $request->user_id;
        $post->content = $request->content;
        $post->photo = $request->photo;
        $post->slug = $request->slug;
        $post->save();
    }



    public function show($id)
    {
        return post::where('approved', '=', true)->find($id);
    }



    public function update(Request $request, $id)
    {
        //$post = post::find($id);
        ///$post->update($request->all());

        ///  return $post;
        $post = post::find($id);
        $post->update($request->input());
    }




    public function destroy($id)
    {
        return post::destroy($id);
    }
}
