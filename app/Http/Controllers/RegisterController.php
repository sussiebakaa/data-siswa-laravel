<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

class RegisterController extends Controller
{

    public function index()
    {
        return view('Signup.signup', ["title" => "Register"]);
    }

    public function store(Request $request)
    {
        $userData =  [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
        ];

        User::create($userData);
        $request->session()->flash('success', 'Register berhasil, Silahkan login !');

        return redirect('/Login/signin');
    }

}