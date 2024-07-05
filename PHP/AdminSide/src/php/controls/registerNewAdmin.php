<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($username) || empty($email) || empty($password)){
        header("location: registerNewAdmin.php");
    }else{
        include_once "../../../../model/connection.php";

        $query = "INSERT INTO admin_accounts (username, email, password) VALUES (:username, :email, :password);";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        $stmt = "";
        $conn = "";
        header("location: ../index.php");
        die();
    }
}