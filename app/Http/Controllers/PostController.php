<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Posts::orderBy('created_at', 'desc')->get();

        return view('/dashboard', compact([
            'posts'
        ]));
    }

    public function create(){
        return view('created-article');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        Posts::create($request->all());

        return redirect()->back()->with('status', 'Post added!');
        //return response('success', '201');
    }

    public function edit($id){

        $post = Posts::findOrfail($id);
        return view('edit-article', compact([
            'post'
        ]));
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        $post = Posts::findOrfail($id);
        $post->update($request->all());

        return redirect()->back()->with('status', 'Post updated!');
        //return response('success', '201');
    }

    public function delete($id){

        Posts::findOrfail($id)->delete();

        return redirect()->route('dashboard')->with('status', 'Post deleted!');
    }
}
