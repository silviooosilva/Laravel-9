<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use  App\Http\Requests\PostUpdateStore;

class PostController extends Controller
{
    /**
     * Controller para o retorno de todos os posts disponíveis
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostUpdateStore $request)
    {

        $post = Post::create($request->all());
        return redirect()->route('posts.index');


        //dd($request->all());
    }

    public function show($id)
    {
        // dd($id);
        // $post = Post::where('id', $id)->first();

        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('posts.index');
        }
        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('posts.index');
        }
        $post->delete();
        return redirect()->route('posts.index')->with('message', 'Post Deletado com sucesso!');
    }

    public function edit($id)
    {

        $post = Post::find($id);
        if (!$post) {
            return redirect()->back();
        }
        return view('admin.posts.edit', compact('post'));
    }
}
