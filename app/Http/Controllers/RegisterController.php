<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use App\Models\User;
class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // dd('Registrasi berhasil');

        //Enkripsi password
        // $validatedData['password'] = bcrypt($validatedData['password']); // pakai bycrypt
        $validatedData['password'] = Hash::make($validatedData['password']); //pakai hash


        User::create($validatedData);


        // return redirect('/login');
        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login!');
    }

}
