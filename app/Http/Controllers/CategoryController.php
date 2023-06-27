<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function category_index(){
        $categories = Category::all();
        return view('category_index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function category_create(){
        
        return view('category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function category_store(CategoryRequest $request_cat){

        Category::create([
            'name' => $request_cat-> name
        ]);
        return redirect()->route('category_index')->with('success', 'Inserimento avvenuto con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function category_show(Category $category){
        return view ('category_show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function category_edit(Category $category){
        return view ('category_edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function category_update(CategoryRequest $request, Category $category){
        $category->update([
            'name'=>$request->input('name'),
        ]);
        return redirect()->route('category_index') ->with('success','Modifica effettuata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function category_destroy(Category $category){
        $category->delete();
        return redirect()->route('category_index')->with('success','Canellazione effettuata');
    }
}
