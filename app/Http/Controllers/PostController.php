<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view("posts", ["posts" => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view("form_add_post");
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
       Post::create([
           'title'  => $request->title,
           'body'   => $request->body,
       ]);

       return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        return view('post', ['posts'=>Post::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('form_edit_post', ['posts'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title=$request->title;
        $post->body = $request->body;

        $post->save();
        return view('post', ['posts'=>Post::find($id)]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Post $post)
    {
        $post-> delete();

        return redirect('posts');
    }
}
