<?php
    try{
        $host = "localhost"; // change this to actual server
        $user = "root"; //change this to actual user
        $pass = ""; // add password if there is a password
        $db = "inm_audio"; // change this with the actual database name

        // verifying the connection
        $conn = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){ 
        // add some modification for better error U.I
        // Like: navigating to a new page where it displays the error
        die("Could not connect, error occured"); // change this if nescessary
    }
?>