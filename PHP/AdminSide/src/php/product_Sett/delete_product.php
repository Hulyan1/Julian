<?php

include "../../../../model/connection.php";

if (isset($_GET['id'])) {
    $stmt = $conn->prepare("DELETE FROM products WHERE product_id = :id");
    $stmt->bindParam(':id', $_GET['id']);

    $stmt->execute();

    header("location: ../ui-product.php");
}