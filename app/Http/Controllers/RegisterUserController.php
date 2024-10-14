<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

use function Laravel\Prompts\password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {

        $attributes = request()->validate([
            'first_name'        => ['required'],
            'last_name'         => ['required'],
            'email'             => ['required', 'email'],
            'password'          => ['required', password::min(6), 'confirmed']
        ]);
       

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/jobs');

    }
}
