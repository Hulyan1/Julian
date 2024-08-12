<?php

namespace App\Controllers;

class AdminDashboard extends BaseController {
    // session initialize
    protected $session;
    public function __construct() {
        // Initialize the session service
        $this->session = \Config\Services::session();
    }
    
        
// ------------------------------------------------------------------------------------------------------------ //
    

    public function index() {
        return view("AdminSide/adminIndex");
    }

    public function products() {
        return view("AdminSide/adminProducts");
    }


    public function saves() {
        return view("AdminSide/adminSaves");
    }


    public function customize() {
        return view("AdminSide/adminCustomize");
    }


    public function addProducts() {
        return view("AdminSide/adminAddProducts");
    }

    public function register() {
        return view("AdminSide/adminRegister");
    }

    public function transactions() {
        return view("AdminSide/adminTransactions");
    }
}