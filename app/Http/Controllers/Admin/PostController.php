<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To show all posts
        $posts = Post::paginate(5);
        return view('admin.posts.allposts' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.posts.addpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //To validate user inputs and store it in DB
        $validator = Validator::make($request->all() , [
            'postbody' => ['required'],
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $post = new Post();
        $post->postbody = $request->input('postbody');
        $post->save();
        return redirect()->back()->with(['success' => 'Post has been added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //To edit Posts
        $post = Post::findOrFail($id);
        return view('admin.posts.editpost', compact('post'));
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
        //To update Posts
        $validator = Validator::make($request->all() , [
            'postbody' => ['required', 'min:4' , 'max:225'],
        ]);
        // ERROR: There is no validation rule named string
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // Second insert new inputs in DB
        $post = Post::findOrFail($id);
        $post->postbody = $request->input('postbody');

        $post->update();
        return redirect()->back()->with(['success' => 'Post has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //To delete post
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back()->with(['success' => 'User has been deleted']);
    }
}
