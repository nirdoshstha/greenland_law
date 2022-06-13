<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Validator;

class UserRegister extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user.index')->with('user',$user);
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.user.edit-user')->with('user',$user);
    }


    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->user_role = $request->input('user_role');
        $user->ban_unban = $request->input('ban_unban');

        $user->save();
        return redirect('admin/user-register')->with('status','Your Data is Saved');
    }


    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status','You have successfully deleted your data.');
    }
}
