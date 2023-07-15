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
        $articleSell = Article::where('is_accepted', 2)->where('user_id', $user->id)->count();
        $totalArticles = $articleCount + $articleSell;
        return view('user.show', compact('user','articles','articleCount','totalArticles'));
    }

    public function edit(User $user) {
        if(Auth::user()->id=== $user->id) {
           return view('user.edit',['user'=>$user]); 
        } else {
            abort(401);
        }
        
    }

    public function update(Request $request)
{
    $user = auth()->user()->profile;
    $user->name = $request->input('name');
    $user->surname = $request->input('cognome');
    $user->eta = $request->input('eta');

    if ($user->hasFile('foto')) {
        $image = $request->file('foto');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $user->foto = $imageName;
    }

    $user->save();

    return redirect('/profile')->with('success', 'Profilo aggiornato con successo.');
}

}
