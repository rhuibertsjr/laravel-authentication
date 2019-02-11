<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    }

    public function update_Password(Request $request) {

        $data = $request->validate([
            'new_password' => 'required|confirmed|min:6',
            'new_password_confirmation' =>'required|min:6'
        ]);

        $user = Auth::user();
        $user->password = Hash::make($data['new_password']);
        $user->save();

        Auth::logout();

        return redirect()->route('login');
    }
}
