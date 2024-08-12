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
        return view('UserSide/userHome');
    }

    public function gearLibrary() {
        return view("UserSide/userLibrary");
    }

    public function community() {
        return view("UserSide/userComm");
    }

    public function customize() {
        return view("UserSide/userCustomize");
    }

    public function shop() {
        return view("UserSide/userShopp");
    }

    public function accountSettings() {
        return view("UserSide/userAccountSettings");
    }
}