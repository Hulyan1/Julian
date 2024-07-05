<?php

    if (isset($_POST['submit'])) {  
        
        try {    
            include_once "../../../../model/connection.php";
            
            // Handle file upload
            $image = $_FILES['image']['name'];
            $target = 'uploads/' . basename($image);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                // Prepare SQL and bind parameters
                $stmt = $conn->prepare("INSERT INTO products (product, name, price, category) VALUES (:image, :name, :price, :category)");
                $stmt->bindParam(':image', $image);
                $stmt->bindParam(':name', $_POST['name']);
                $stmt->bindParam(':price', $_POST['price']);
                $stmt->bindParam(':category', $_POST['category']);

                $stmt->execute();              

                header("Location: ../addNewProduct.php");
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }

        $pdo = null;
}