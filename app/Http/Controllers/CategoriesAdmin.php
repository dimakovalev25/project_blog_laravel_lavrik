<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesAdmin extends Controller
{
    public function index()
    {
        return 'catadmin home';
        return view('categories.index', ['categories' => Category::all()]);
    }

    public function show(string $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        dd($category);
        return view('categories.show', ['category' => Category::findOrFail($id)]);
    }

    public function trashlist()
    {
        $trashedcategory = Category::onlyTrashed()->get();
        return view('catadmin.index', compact('trashedcategory'));
    }

    public function restore($id){
        $category= Category::onlyTrashed()->findOrFail($id);
        $category->restore();
        return view('categories.index', ['categories' => Category::all()]);

    }

    public function destroy($id){
        $category= Category::onlyTrashed()->findOrFail($id)->forceDelete();
        return view('categories.index', ['categories' => Category::all()]);
    }
}
