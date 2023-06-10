<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Categories extends Controller
{
    public function index()
    {
        return view('categories.index', ['categories' => Category::all()]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|min:2|max:100|unique:categories',
            'title' => 'required|min:2|max:100',
            'description' => 'required',
        ]);


        $data = $request->only(['title', 'slug', 'description']);
        Category::create($data);

//        $cat = new Category();
//        $cat->fill($data);
//        $cat->save();

        return redirect()->route('category.index');
    }

    public function show(string $id)
    {
        return view('categories.show', ['category' => Category::findOrFail($id)]);
    }


    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }


    public function update(Request $request, string $id)
    {

        $request->validate([
            'slug' => 'required|min:2|max:100|unique:categories',
            'title' => 'required|min:2|max:100',
            'description' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $data = $request->only('title', 'slug', 'description');
        $category->update($data);
        return redirect()->route('category.index');
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
//        $category->destroy($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
