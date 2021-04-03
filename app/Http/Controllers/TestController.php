<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test () {
        return 'Hello world';
    }
    public function index(){
        return view('home');
    }
}
