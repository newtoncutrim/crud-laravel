<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {

    }
    public function create(Request $request, Post $post){

        $post->title = 'teste';
        $post->content = 'conteudo qualquer';
        $post->author = 'newton';
        $post->save();

    }

    public function listOne(Request $request, Post $post){
        return $post->find(1);

    }

    public function listAll(Request $request, Post $post){
        $data = $post->all();
        $data->toArray();

        return view('list', compact('data'));


        // ss
    }

    public function update(Request $request, Post $post){
        $r = $post->where('id','>',0)->update([
            'author' => 'desconhecido'
        ]);
        return $r;
    }

    public function delete(Request $request, Post $post){
        return $post->where('id','=',2)->delete();
    }

}
