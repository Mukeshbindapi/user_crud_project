<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $style = 'credental not match';
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('user/list');
        }else{
            return back()->with('error',$style);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
