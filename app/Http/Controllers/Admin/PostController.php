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
        //To show all Posts
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
        //To validate Post inputs and store it in DB
        $validator = Validator::make($request->all() , [
            'postbody' => ['required'],
        ]);
        //To start storing Posts in DB
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $post = new Post();
        $post->postbody = $request->input('postbody');
        $post->user_id=auth()->id();
        $post->save();
        return redirect()->back()->with(['success' => 'Post was added']);
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
        $post = Post::findOrFail($id);
        return view('admin.posts.showpost', compact('post'));
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
        // Second update Posts in DB
        $post = Post::findOrFail($id);
        $post->postbody = $request->input('postbody');

        $post->update();
        return redirect()->back()->with(['success' => 'Post was updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //To delete Post
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back()->with(['success' => 'Post was deleted']);
    }
}
