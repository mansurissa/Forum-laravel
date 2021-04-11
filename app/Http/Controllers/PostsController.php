<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public  function index() {
        return view('posts.index');
    }
    public  function store (Request $request) {
        $this->validate($request,[
            'body'=>'required'
            ]);
            // dd($request->user()->posts);
        $request->user()->posts()->create($request->only('body')); 
        return  back();

    }
} 