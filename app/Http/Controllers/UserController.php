<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::orderBy('id','desc')->get();
    	return view('user.index', $data);
    }
    public function add()
    {
        return view('user.add');
    }
    public function store(Request $request)
    {
        $user   =   new User;
        $user->name      =   $request->name;
        $user->email     =   $request->email;
        $user->password  =   $request->password;
        $user->save();
        return redirect('/user');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user'=>$user]);
    }
}
