<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index() {

        if (isset(auth()->user()->id)) {

            $users = User::where('id', '!=', auth()->user()->id)->get();

            return view('Messages.users', compact('users'));
        }
        else {

            return view('auth.login');
        }
    }

    public function show(User $user) {

        if (isset(auth()->user()->id)) {


            return view('Messages.chat', compact('user'));
        }
        else {

            return view('auth.login');
        }
    }
}
