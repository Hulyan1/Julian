<?php

namespace App\Controllers;

use App\Models\adminAccounts;
use App\Models\userAccounts;
use CodeIgniter\Controller;
use CodeIgniter\Controller\Home;

class Signup_Login extends BaseController 
{
    // signup user only
    public function signup() {

    }


    // login user or admin
    public function login() {
        $username = $_POST['username'];
        $password = $_POST['pass'];

        $adminAccount = new adminAccounts();
        $adminFields = $adminAccount->findAll();
        
        $userAccount = new userAccounts();
        $userFields = $userAccount->findAll();

        foreach($userFields as $user){
            $userU = $user['username'];
            $emailU = $user['email'];
            $passU = $user['password'];
    
            if($userU == $username || $emailU == $username && $password == $passU) {
                // return view('UserSide/index');
                return "it is working"; //change this to proper path
            }else {
                foreach($adminFields as $admin){
                    $userA = $admin['username'];
                    $emailA = $admin['email'];
                    $passA = $admin['password'];
            
                    if($userA == $username || $emailA == $username && $password == $passA) {
                        return view('AdminSide/index');
                    }
                    else {
                        return view('/signup_login');
                    }    
                }   
            }
        }   
    }
}