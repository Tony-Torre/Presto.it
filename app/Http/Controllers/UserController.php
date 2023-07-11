<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function my_index(){
        if(Auth::user()){
            $articles = Article::where('user_id',Auth::user()->id)->get();
        }else{
            $articles = Article::all();
        }
        return view('user.index',['articles'=>$articles]);
    }

    public function show(User $user) {
        $articles = Article::where('is_accepted', true)->where('user_id', $user->id)->get();
        $articleCount = Article::where('is_accepted', true)->where('user_id', $user->id)->count();
        return view('user.show', compact('user','articles','articleCount'));
    }
}
