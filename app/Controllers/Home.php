<?php

namespace App\Controllers;

class Home extends BaseController
{
    // return the wepages in view folder
    //index or home or landing page (/) in routes.php
    public function home() {
        return view('home');
    }

    //return library file in views
    public function gearLibrary(){
        return view('library');
    }

    //return community(comm) file in views
    public function community(){
        return view('comm');
    }

    //return customize file in views
    public function customize(){
        return view('customize');
    }

    //return shopp file in views
    public function shop(){
        return view('shopp');
    }

    //return signup_login file in views
    public function account() {
        return view('signup_login');
    }
}
