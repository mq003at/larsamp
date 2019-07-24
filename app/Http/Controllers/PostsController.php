<?php

namespace App\Http\Controllers;
// php artisan make:controller PostsController --resource will create default methods for the controller

use Illuminate\Http\Request;
use App\Posts;
use Auth;

use DB; // library using the commands from your own database

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        // authentication middleware to show the login screen 
        $this->middleware('auth');
    }

    public function index()
    {
        // middlewares holding contents for \larsamp\public\posts
        $posts =  Posts::orderBy('title', 'asc')->paginate(5);        // order the posts ascendingly and get them all, put them into $posts, we can also add ->take(1) to take only first post
        // find specific posts with where $posts = Posts::where('title', 'Hello World!')->get();
        // if having use DB $posts = DB::select('SELECT * FROM posts');
        return view('posts.index') -> with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // \larsamp\public\posts\create
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dealing with the data from create.blade.php
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);  // validate the form
        $post = new Posts([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'user_id' => auth()->id(),
            'user_name' => Auth::user()->name
        ]);
        $post->save();
        return redirect('/posts')->with('success', 'Post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // code the dynamic site when got to /posts/{{$id}}
        $post = Posts::find($id);
        return view('posts.show') -> with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // retrieve the post need editted and throw them to edit.php
        $post = Posts::find($id);
        return view('posts.edit')->with('post', $post);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // get the updated data
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);  // validate the form

        $post = Posts::find($id);
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete the data
        $post = Posts::find($id);
        $post->delete();

        return redirect('/posts')->with('success', 'The post has been removed');
    }
}
