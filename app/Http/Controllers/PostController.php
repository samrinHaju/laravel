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
    public function show( $id)
    {
        return view('posts.show',['posts' => BlogPost::find($id)]);

    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePost $request){

        $validatedData = $request->validated();
       
        $blogPost = BlogPost::create($validatedData);       //use to create new entry in database
        $request->session()->flash('$blogPost->content','blog Post was added');
        return redirect()->route('posts.show',['post'=> $blogPost->id]);
    }

    public function edit($id){
        $post = BlogPost::findOrFail($id);
        return view ('posts.edit',['post' => $post]);
    }

    public function update(StorePost $request,$id){
        $post = BlogPost::findOrFail($id);
        $validatedData = $request->validated();

        $post->fill($validatedData);                        //used for updating the database
        $post->save();                                      // save the chnages into the database 
        $request->session()->flash('$blogPost->content','Blog Post was updated');
        return redirect()->route('posts.show',['post'=> $post->id]);
    }

    public function destroy(Request $request,$id){
        $post = BlogPost::findOrFail($id);                 // read the data from the database
        $post->delete();                                    //delete the data frm the database
        
        // BlogPost::destroy($id);                             //we can use this alternative either above two lines

        $request->session()->flash('$blogPost->content','Blog Post was deleted');
        return redirect()->route('posts.index');
    }
}
