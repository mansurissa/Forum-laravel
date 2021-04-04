<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test () {
        return 'Hello world';
    }
    public function index($name){
       $data =[
           'phone1'=>'iPhone11',
           'phone2'=>'iPhone12'
       ];
        return view('home',['data'=>$data[$name]?? 'Phone '.$name.' not Found']);
    }
}
