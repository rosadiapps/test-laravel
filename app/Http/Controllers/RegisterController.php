<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|min:5|max:255',
            'username' => 'required|string|min:7|max:255|unique:users',
            'email' => 'required|string|email:dns|max:255|unique:users',
            'password' => 'required|string|min:8|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // $request->session()->flash('status', 'Berhasil mendaftar! Silahkan login!');

        return redirect('/login')->with('status', 'Berhasil mendaftar! Silahkan login!');
    }
}
