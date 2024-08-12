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
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        } 
        else if($this->session->get('user_logged_in')) {
            return view('UserSide/userHome');
        }else {
            return view('home');
        }
    }



    //return library file in views
    public function gearLibrary(){
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        }
        else if($this->session->get('user_logged_in')) {
            return view('UserSide/userLibrary');
        } else {
            return view('library');
        }
    }



    //return community(comm) file in views
    public function community(){
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        } 
        else if($this->session->get('user_logged_in')) {
            return view('UserSide/userComm');
        }
        else {
            return view('comm');
        }
    }



    //return customize file in views
    public function customize(){
        // if login in to admin account session
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        }
        else if($this->session->get('user_logged_in')) {
            return view('UserSide/userCustomize');
        }
         else {
            return view('customize');
        }
    }



    //return shopp file in views
    public function shop(){
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        } 
        else if($this->session->get('user_logged_in')) {
            return view('UserSide/userShopp');
        }
        else {
            return view('shopp');
        }
    }



    //return signup_login file in views
    public function account() {
        if ($this->session->get('admin_logged_in')) {
            return view('AdminSide/index');
        } 
        else if($this->session->get('user_logged_in')) {
            return view('UserSide/userAccountSettings');
        }
        else {
            return view('signup_login');
        }
    }


    
}
