<?php

namespace App\Controllers;

class Home extends BaseController
{
    // session initialize
    protected $session;
    public function __construct() {
        // Initialize the session service
        $this->session = \Config\Services::session();
    }

    
// ------------------------------------------------------------------------------------------------------------ //


// return the wepages in view folder
    //index or home or landing page (/) in routes.php
    public function home() {
        // if login in to admin account session
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        } else {
            return view('home');
        }

        // if login in to user account session
        if ($this->session->get('user_logged_in')){
            return view('');
        } else {
            return view('home');
        }
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
