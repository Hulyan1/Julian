<?php

namespace App\Controllers;
use App\Models\adminAccounts;

class AdminDashboard extends BaseController {
    // session initialize
    protected $session;
    public function __construct() {
        // Initialize the session service
        $this->session = \Config\Services::session();
    }
    
        
// ------------------------------------------------------------------------------------------------------------ //
    

    // admin dashboard
    public function index() {
        return view("AdminSide/adminIndex");
    }

    // admin transactions
    public function transactions() {
        return view("AdminSide/adminTransactions");
    }

    // admin products
    public function products() {
        return view("AdminSide/adminProducts");
    }

    // admin manage users
    public function userManagement() {
        return view("AdminSide/adminManageUsers");
    }


    // admin register
    public function register() {
        return view("AdminSide/adminRegister");
    }



    public function addNewAdmin() {
        $model = new adminAccounts();
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
    
        // Check if email already exists
        if ($model->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email is already in use.');
        }
    
        // Check if username already exists
        if ($model->where('username', $username)->first()) {
            return redirect()->back()->with('error', 'Username is already in use.');
        }
    
        $data = [
            'username' => $username,
            'email' => $email,
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
    
        // Save admin data
        if ($model->save($data)) {
            return redirect()->to('/admin')->with('success', 'Account successfully created. Please login.');
        } else {
            return redirect()->back()->with('error', 'An error occurred while creating the account.');
        }
    }
}