<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(){
    session_start();


    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

    if($username == "admin"){
        if($password == "admin"){
            echo "logged in";
            $_SESSION['logedin'] = true;
            return redirect('/portal');
        }
        else{
            echo "Wrong Password";
        }
    }
    else{
        echo "Wrong Username";
        }
    }    
    }
}
