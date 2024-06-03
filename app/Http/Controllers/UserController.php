<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'fname'=>['required','regex:/[A-Za-z]/'],
            'lname'=>['required','regex:/[A-Za-z]/'],
            'email'=>['required','email:rfc,dns','unique:users'],
            'password'=>['required','confirmed']
        ]);
        $user = new User();
        $user->firstname = $request->fname;
        $user->lastname = $request->lname;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->save();
        return redirect()->back()->with('success','Successful Registration');
    }

    public function auth_user(Request $request){
        $request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);
        $user = User::query()->where('email',$request->email)->where('password',md5($request->password))->first();
        if($user){
            Auth::login($user);
            return redirect()->route('show_welcome')->with('success','Successful Autorization');
        }
        else{
            return redirect()->back()->with('error','User not found');
        }
    }
}
