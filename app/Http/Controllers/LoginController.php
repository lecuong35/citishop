<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
session_start();

class LoginController extends Controller
{
    public function login() {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $emailData = config('login.email');
        $passwordData = config('login.password');

        echo $emailData[0];

        if($email == $emailData[0] && $password == $passwordData[0]) {
            $_SESSION['login'] = 1;
            $_SESSION['name'] = $email;
            return redirect('/');
        }
        else{
            $_SESSION['login'] = 0;
            return redirect('/login');
        }

    }
}
