<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Index()
    {
        return view('register.index', [
            'title'=> 'register'

        ]);
    }
}
