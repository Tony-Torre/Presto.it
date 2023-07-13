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
        
        $articles = Article::search($request->searched)->where('is_accepted', true)->paginate(6);
        
        return view('article.index', compact('articles'));
    }
    
    public function search(Request $request){
        
        $priceMin= $request->price_min ? $request->price_min : 0;
        $priceMax= $request->price_max ? $request->price_max : PHP_INT_MAX;
        
        $articles = Article::where('category_id','like','%' . $request->search_category .'%')
        ->where('title','like','%' . $request->search_article .'%')
        ->where('price', '>=', $priceMin)
        ->where('price', '<=', $priceMax)
        ->where('is_accepted', true)
        ->paginate(6);
        
        
        return view('article.index',['articles'=>$articles]);
        
    }
    
    public function setLanguage($lang) {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
