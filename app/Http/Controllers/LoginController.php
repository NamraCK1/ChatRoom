<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\UserEvent;
use Illuminate\Contracts\Session\Session;

class LoginController extends Controller
{
    function Login(Request $request) {
        $request->validate([
            'username' => 'required|alpha',
            'password' => 'required'
        ]);
        // if (Auth::attempt($credentials)) {
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            $request->session()->put('id', $request['id']);
            $request->session()->put('uname', $request['username']);
            // dd($request['password']);
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
    function Register(Request $req) {
        $req->validate([
            'username' => 'required|alpha',
            'password' => 'required',
            'confirmpassword' => 'required|same:password',
        ]);

        $user = new User();
        $user->name = $req->input('username');
        $user->password = bcrypt($req->input('password')); // Hash the password before storing
        $user->save();
        event(new UserEvent($req['username']));

    return redirect()->route('home')->with('success', 'Registration successful! Please log in.');
    }
}