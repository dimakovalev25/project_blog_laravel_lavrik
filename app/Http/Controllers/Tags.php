<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\Tag\Save as TagRequest;

class Tags extends Controller
{
    public function index(){
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    public function create(){
        return view('tag.create');
    }

    public function store(TagRequest $request){
        $data = $request->validated();

        Tag::create($data);

        $tags = Tag::all();
        return view('tag.index', compact('tags'));

    }

    public function destroy($id){
        $tag = Tag::findOrFail($id);
        $tag->delete();

        $tags = Tag::all();
        return view('tag.index', compact('tags'));

    }
}
