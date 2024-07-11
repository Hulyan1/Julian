<?php

namespace App\Controllers;

class Home extends BaseController
{
    // return the wepages in view folder
    //index or home or landing page (/) in routes.php
    public function home() {
        return view('home');
    }

    //gearlibrary page (/gearlibrary) in routes.php
    public function gearlibrary() {
        return view('gearlibrary');
    }
    
    //community page (/community) in routes.php
    public function community() {
        return view('community');
    }

    // customize page (/customize) in routes.php
    public function customize() {
        return view('customize');
    }

    // shop page (/shop) in routes.php
    public function shop() {
        return view('shop');
    }

    // cart page (/cart) in routes.php
    public function cart() {
        return view('cart');
    }

    // signup page (/signup_login) in routes.php
    public function signup_login() {
        return view('signup_login');
    }



}
