<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Post;
 
class UserController extends Controller
{
    
    public function index(User $user)
    {
        $user = \App\User::find(Auth::user()->id);
        $posts = Post::where('user_id', $user->id) ->orderBy('created_at', 'desc')->paginate(10);
        return view('posts/userprofile')->with(['posts' => $posts,'user'=>$user]);
    }
}
