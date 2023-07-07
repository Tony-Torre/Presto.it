<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Models\Article;
use App\Models\User;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $categories = Category::all();
        return view('category.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request){

        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->route('category.index')->with('success', 'Inserimento avvenuto con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category){
        $users=Category::all();
        $order_desc= Article::where('is_accepted',1)->orderBy('created_at', 'desc')->get();
        
        // $order_desc->paginate(6);

        return view('category.show',compact('category'),['categorys'=>$order_desc]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category){
        return view ('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category){
        $category->update([
            'name'=>$request->input('name'),
        ]);
        return redirect()->route('category.index') ->with('success','Modifica effettuata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('category.index')->with('success','Canellazione effettuata');
    }
}
