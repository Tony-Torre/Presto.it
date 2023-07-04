<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function searchArticle (Request $request) {

        $articles = Article::search($request->searched)->where('is_accepted', true)->get();
    
        return view('article.index', compact('articles'));
    }
}
