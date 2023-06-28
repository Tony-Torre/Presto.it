<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $users=User::all();
        return view('article.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {   
        return view('article.edit', ['article'=>$article]);
    }


    public function search(Request $request){
        $search_article = Article::where('category_id', $request->search_category)
        ->where('title','like','%' . $request->search_article .'%')->get();
        return view('article.index',['articles'=>$search_article]);

    }
}
