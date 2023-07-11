<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function searchArticle (Request $request) {

        $articles = Article::search($request->searched)->where('is_accepted', true)->get();
    
        return view('article.index', compact('articles'));
    }

    public function search(Request $request){
        
        if(!empty($request->searched)){
            $articles = Article::search($request->searched)->where('is_accepted', true)
            ->get();
        }
        else{
            $articles = Article::where('category_id','like','%' . $request->search_category .'%')
            ->where('title','like','%' . $request->searched .'%')->get();
        }
        
        return view('article.index',['articles'=>$articles]);
        
    }

    public function setLanguage($lang) {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
