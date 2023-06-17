<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

use App\Http\Requests\Video\Save as videoRequest;

class Videos extends Controller
{

    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(videoRequest $request)
    {
        $data = $request->validated();
        Video::create($data);

        return redirect()->route('video.index');
    }

    public function show(string $id)
    {
        $video = Video::findOrFail($id);
        return view('videos.show', compact('video'));

    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
