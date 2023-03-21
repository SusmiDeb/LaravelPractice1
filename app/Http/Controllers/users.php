<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class users extends Controller
{

    function logController()
    {
        return view('login');
    }

    function list()
    {
        // return view('userlist');
        $user = user::all();
        return view('userlist', ['user' => $user]);
    }

    function create()
    {
        return view('create');
    }

    function logsubmit(Request $req)
    {
        // print_r($req->input());
        User::select('*')->where(
            [
                ['email', '=', $req->email],
                ['password', '=', $req->password]

            ]

            //56m

        )->get();

        $req->session()->put('logData', [$req->input()]);
        echo $req;
       
        return redirect('/user');
    }


    function createeSubmit(Request $req)
    {
        $user = new user;
        $user->name = $req->naame;
        $user->email = $req->emai;
        $user->password = $req->pword;
        $result = $user->save();
        if ($result) {
            $req->session()->put('logData', [$req->input()]);
            return redirect('/log');
        }

    }
}