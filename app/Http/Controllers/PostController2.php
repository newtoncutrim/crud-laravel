<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Post $post)
    {
        $post->title = 'teste';
        $post->content = 'conteudo qualquer';
        $post->author = 'newton';
        $post->save();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {
        $data = $post->all();
        $data->toArray();

        return view('list', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Post $post)
    {
        return $post->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string|int $id = 2, Post $post)
    {
        $r = $post->find($id)->update([
            'author' => 'desconhecido'
        ]);

        return $r;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Post $post)
    {
        return $post->where($id)->delete();
    }
}
