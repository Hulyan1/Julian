<?php

namespace App\Controllers;
use App\Models\userAccounts;

class UserAccount extends BaseController 
{
    // session initialize
    protected $session;
    public function __construct() {
        // Initialize the session service
        $this->session = \Config\Services::session();
    }

    
// ------------------------------------------------------------------------------------------------------------ //



    public function home() {  
        if($this->session->get('user_logged_in')) {
            return view('UserSide/userHome');
        }else {
            return view('home');
        }  
    }

    public function gearLibrary() {
        if($this->session->get('user_logged_in')) {
            return view("UserSide/userLibrary");
        }else {
            return view('home');
        }
    }

    public function community() {
        if($this->session->get('user_logged_in')) {
            return view("UserSide/userComm");
        }else {
            return view('home');
        }
    }

    public function customize() {
        if($this->session->get('user_logged_in')) {
            return view("UserSide/userCustomize");
        }else {
            return view('home');
        }
    }

    public function shop() {
        if($this->session->get('user_logged_in')) {
            return view("UserSide/userShopp");
        }else {
            return view('home');
        }
    }

    public function accountSettings() {
        if($this->session->get('user_logged_in')) {
            return view("UserSide/userAccountSettings");
        }else {
            return view('home');
        }
    }
}