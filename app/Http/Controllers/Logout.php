<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logout extends Controller
{
    public function store(){
        session_start();
        $_SESSION['logedin'] = false;
        return redirect('/login');
    }
}
