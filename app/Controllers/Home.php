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
            return view('UserSide\userHome');
        } else {
            return view('home');
        }
    }



    //return library file in views
    public function gearLibrary(){
        // if login in to admin account session
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        } else {
            return view('library');
        }

        // if login in to user account session
        if ($this->session->get('user_logged_in')){
            return view('UserSide\userLibrary');
        } else {
            return view('library');
        }
    }



    //return community(comm) file in views
    public function community(){
        // if login in to admin account session
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        } else {
            return view('comm');
        }

        // if login in to user account session
        if ($this->session->get('user_logged_in')){
            return view('UserSide\userComm');
        } else {
            return view('comm');
        }
    }



    //return customize file in views
    public function customize(){
        // if login in to admin account session
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        } else {
            return view('customize');
        }

        // if login in to user account session
        if ($this->session->get('user_logged_in')){
            return view('UserSide\userCustomize');
        } else {
            return view('customize');
        }
    }



    //return shopp file in views
    public function shop(){
                // if login in to admin account session
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        } else {
            return view('shopp');
        }

        // if login in to user account session
        if ($this->session->get('user_logged_in')){
            return view('UserSide\userShopp');
        } else {
            return view('shopp');
        }
    }



    //return signup_login file in views
    public function account() {
                // if login in to admin account session
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        } else {
            return view('signup_login');
        }

        // if login in to user account session
        if ($this->session->get('user_logged_in')){
            return view('UserSide\userAccountSettings');
        } else {
            return view('signup_login');
        }
    }


    
}
