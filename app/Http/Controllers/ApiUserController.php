<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiUserController extends Controller
{
    public function getMostPopular()
    {
        $u= User::all()->take(7)->sortByDesc('Rating');
        return $u;
    }
    
    public function rateUser(Request $request, User $user)
    {
        $user->rateOnce($request->rating);
        return response('OK');
    }
    
    public function addToFavorate(Request $request)
    {
        Auth::user()->favorates()->attach(2);
        return response('OK');
    }
    
    public function removeFromFavorate(Request $request)
    {
        Auth::user()->favorates()->detach($request->worker_id);
        return response('OK');
    }

    public function getFavorate(User $user)
    {       
        return $user->favorates;
    }
}
