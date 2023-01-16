<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class IndexController extends Controller
{
    public function index(){
        $message =message::all();
        return view('/index');
    }


    public function insert(Request $request){
        message::insert($request->except('_token', 'submit', 'save'));
        return redirect('/ ');

        // $name = $request->input('name');
        // $email = $request->input('email');
        // $message = $request->input('message');
        // $data=array(
        //     'name' => $name,
        //     'email' => $email,
        //     'message' => $message

        // );
        // return redirect('/index');
    }

}
