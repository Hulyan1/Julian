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




    // adds new administrator with validations
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



    // add products and store them in the database table as URL and stores the image in the uploads folder.
    public function addProduct() {
       if ($this->request->getMethod() === 'post') {
        $validation = \Config\Services::validation();

        // Define validation rules
        $validation->setRules([
            'product' => 'required|min_length[3]|max_length[255]',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'cat_id' => 'required|integer',
            'image' => 'uploaded[image]|max_size[image,5048]|is_image[image]'
        ]);

        // Check if form validation passed
        if ($validation->withRequest($this->request)->run()) {
            // Handle file upload
            $image = $this->request->getFile('image');
            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('uploads', $newName);
            } else {
                $newName = null;
            }
            
            

            // Prepare data for insertion
            $data = [
                'product' => $this->request->getPost('product'),
                'price' => $this->request->getPost('price'),
                'quantity' => $this->request->getPost('quantity'),
                'cat_id' => $this->request->getPost('cat_id'),
                'image' => $newName
            ];

            // Save the product to the database
            $model = new \App\Models\products();
            if ($model->save($data)) {
                // Redirect with success message
                return redirect()->to('AdminSide/adminProducts')->with('success', 'Product added successfully!');
            } else {
                // Redirect with error message
                return redirect()->to('AdminSide/adminProducts')->with('error', 'Failed to add product.');
            }
        } else {
            // Redirect back with validation errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    }

    // Render the add product view if method is not POST
    return view('AdminSide/adminProducts');                                 
    }
}