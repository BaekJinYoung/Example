<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->action([PopupController::class, 'index']);
        }

        return redirect()->back()->withInput()->withErrors([
            'username' => '아이디 또는 비밀번호가 일치하지 않습니다.',
        ]);
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('admin.auth.login');
    }
}
