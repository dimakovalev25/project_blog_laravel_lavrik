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


}
