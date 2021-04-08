<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public  function index() {
        return view('auth.register');
    }
  public  function store(Request $request) {
 
    $this->validate($request,[
        'name'=>'required|max:255|min:2',
        'username'=>'required|max:255|min:2',
        'email'=>'required|max:255|email',
        'password'=>'required'
        ]);

    User::create([
        'name'=>$request->name,
        'username'=>$request->username,
        'email'=>$request->email,
        'password'=> Hash::make($request->password),

    ]);
    }
}
