<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   

        return view('article.index');
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

    public function article_serch(Request $request){
        $article_serch = Article::where('title','like','%'.$request->article_serch.'%')->get();
        //$book_serch = Book::where('category', $request->book_serch)->get();
        //$book_serch = Book::where('author', $request->book_serch)->get();
        return view('article.index',['articles'=>$article_serch]);
    }
}
