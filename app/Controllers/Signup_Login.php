<?php

namespace App\Controllers;

use App\Models\adminAccounts;
use App\Models\userAccounts;

use CodeIgniter\Controller;
use CodeIgniter\Controller\Home;

class Signup_Login extends BaseController 
{

    // session initialize
    protected $session;

    public function __construct() {
        // Initialize the session service
        $this->session = \Config\Services::session();
    }


// ------------------------------------------------------------------------------------------------------------ //


    // signup user only
    public function signup() {

    }

    // login user 
    public function registerUserAccount()
    {

    }



    // login as admin 
    public function loginAdmin()
    {
        $usernameOrEmail = $_POST['username'];
        $password = $_POST['pass'];

        $adminAccount = new adminAccounts();
        $adminFields = $adminAccount->findAll();

        foreach($adminFields as $admin){
            $adminUserId = $admin['admin_account_id'];
            $userA = $admin['username'];
            $emailA = $admin['email'];
            $passA = $admin['password'];
            
            if(($usernameOrEmail == $userA && $password == $passA) || ($usernameOrEmail == $emailA && $password == $passA)) {
                $data = [
                    'admin_id' => $adminUserId, 
                    'username' => $userA, 
                    'email' => $emailA,
                    'admin_logged_in' => true
                ];
                $this->session->set($data);

                return view('AdminSide/index');
            } else {
                $userAccount = new userAccounts();
                $userFields = $userAccount->findAll();

                foreach($userFields as $user) {
                    $userId = $user['user_accounts_id'];
                    $userU = $user['username'];
                    $emailU = $user['email'];
                    $passU = $user['password'];

                    if(($usernameOrEmail == $userU && $password == $passU) || ($usernameOrEmail == $emailU && $password == $passU)) {
                        $data = [
                            'user_id' => $userId, 
                            'username' => $userU, 
                            'email' => $emailU,
                            'user_logged_in' => true
                        ];
                        $this->session->set($data);
        
                        return view('AdminSide/index');
                    }  else {
                        return view('/signup_login');
                    }   
                }
            }    
        }
    }


    
    // Log out method
    public function logout()
    {
        // Destroy the session
        $this->session->destroy();
        
        // Redirect to the login page or home page
        return redirect()->to('/');
    }
}