<?php

namespace App\Controllers;

class Home extends BaseController
{
    // return the wepages in view folder
    //index or home or landing page (/) in routes.php
    public function home() {
        return view('home');
    }

    public function gearLibrary(){
        return view('library');
    }

    public function community(){
        return view('comm');
    }

    public function customize(){
        return view('customize');
    }

    public function shop(){
        return view('shopp');
    }

    public function loginSignup() {
        return view('signup_login');
    }
}
