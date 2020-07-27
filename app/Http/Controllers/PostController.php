<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Requests\StorePost;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index',['posts' => BlogPost::all()]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $request->session()->reflash();
        return view('posts.show',['posts' => BlogPost::find($id)]);

    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePost $request){

        $validatedData = $request->validated();
       
        $blogPost = BlogPost::create($validatedData);
        $request->session()->flash('$blogPost->content');
        return redirect()->route('posts.show',['post'=> $blogPost->id]);
    }
}
