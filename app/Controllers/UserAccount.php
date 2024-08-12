<?php

namespace App\Controllers;
use App\Models\userAccounts;

class Signup_Login extends BaseController 
{
    // session initialize
    protected $session;
    public function __construct() {
        // Initialize the session service
        $this->session = \Config\Services::session();
    }

    
// ------------------------------------------------------------------------------------------------------------ //



    public function home() {
        
    }
}