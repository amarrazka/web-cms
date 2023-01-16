<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;

class LoginController extends Controller
{
    public function Index()
    {
        return view('login.index', [
            'title'=> 'login'

        ]);
    }
}
