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

    // signup / create user 
    public function registerUserAccount()
    {
        $model = new UserAccounts();
        $email = $this->request->getPost('email');

        // Check if email already exists
        if ($model->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email is already in use.');
        }

        $data = [
            'firstname' => $this->request->getPost('fname'),
            'lastname' => $this->request->getPost('lname'),
            'email' => $this->request->getPost('email'),
            'phone_num' => $this->request->getPost('pnum'),
            'password' => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
        ];

        // Check if passwords match
        if ($this->request->getPost('pass') !== $this->request->getPost('cpass')) {
            return redirect()->back()->with('error', 'Passwords do not match.');
        }

        // Save user data
        $model->save($data);

        // Set success message
        return redirect()->to('/account')->with('success', 'Account successfully created. Please login.');
    }



    // login as admin or user
    public function loginAdminOrUser()
    {

        // log in for admin acccounts
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
            }   
        }


        // login for user accounts
        $userAccount = new userAccounts();
        $userFields = $userAccount->findAll();

        foreach ($userFields as $user) {
            $userId = $user['user_accounts_id'];
            $emailU = $user['email'];
            $passU = $user['password'];

            // Use password_verify for hashed passwords
            if ($usernameOrEmail == $emailU && password_verify($password, $passU)) {
                $data = [
                    'user_id' => $userId,
                    'email' => $emailU,
                    'user_logged_in' => true
                ];
                $this->session->set($data);

                return view('UserSide/userprofile');
            }
        }

        return view('/signup_login');
    }



    // Log out method
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }
}