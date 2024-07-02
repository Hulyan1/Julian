<?php

session_start();

// this is for loging for admin account
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $userEmailEntered = $_POST['email'];
        $passwordEntered = $_POST['pass'];
        $rememberMe = $_POST['remember'];

        include_once "../model/connection.php";

        $getAdminAccount = "SELECT * FROM admin_accounts;";
        $statement = $conn->prepare($getAdminAccount);
        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($results as $result){
            $adminUser = $result['username'];
            $adminEmail = $result['email'];
            $adminPass = $result['password'];

            if(($adminEmail == $userEmailEntered || $adminUser) == "$userEmailEntered" && $adminPass == $passwordEntered){
                
                $_SESSION['email'] = $adminEmail;
                $_SESSION['username'] = $adminUser;
                header("Location: ../adminhub/index.php");
            
                exit();
            }else{
                header("location: ../view/signup_login.php");
            }
        }

    }
