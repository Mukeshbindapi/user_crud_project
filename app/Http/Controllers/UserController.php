<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        if(!Auth::user()){
            return redirect('/');
        }
        // dd(Auth::user());
        $users = User::all();
        return view('user_list',compact('users'));
    }

    public function create(){
        if(!Auth::user()){
            return redirect('/');
        }
        return view('user_create');
    }

    public function store(Request $request){
        if(!Auth::user()){
            return redirect('/');
        }
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->mobile_no = $request->mobile_no;
        $user->save();
        return redirect('user/list');
    }

    public function edit($id){
        if(!Auth::user()){
            return redirect('/');
        }
        $user = User::find($id);
        return view('user_edit',compact('user'));
    }

    public function update(Request $request){
        if(!Auth::user()){
            return redirect('/');
        }
        // dd($request->all());
        $id = $request->id;
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        // $user->email = $request->email;
        $user->gender = $request->gender;
        $user->mobile_no = $request->mobile_no;
        $user->save();
        return redirect('user/list');
    }

    public function delete($id){
        if(!Auth::user()){
            return redirect('/');
        }
        $user = User::find($id);
        $user->delete();
        return redirect('user/list');
    }

    public function show(){

    }
}
