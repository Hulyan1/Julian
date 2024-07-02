<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productname = $_POST['productname'];
    $productprice = $_POST['productprice'];
    $size = $_POST['size'];
    $type = $_POST['type'];

    $imgData = file_get_contents($_FILES['img']['tmp_name']);
    $imgType = $_FILES['img']['type'];

    if(empty($productname) || empty($productprice)){
        header("Location: ../AddProduct.php");
    }
    include "../../model/connection.php";

    $sql = "INSERT INTO products (product_name, product_price, product_image  , size, type) VALUES (:productname, :productprice, :img, :size, :type)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':productname', $productname);
    $stmt->bindParam(':productprice', $productprice);
    $stmt->bindParam(':img', $imgData, PDO::PARAM_LOB);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':type', $type);

    $stmt->execute();
    $stmt = "";
    $conn = "";
    header("Location: ../mystore.php");
}