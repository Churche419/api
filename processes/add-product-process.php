<?php

if (isset($_POST["send"])) {
    include_once "../config/db-connect.php";

    session_start();

    $productname= $_POST["productName"];
    $price = $_POST["price"];
    $productcategory = $_POST["productCategory"];
    $Description = $_POST["Description"];
    $Image = $_POST["image"];
    $_SESSION['successMsg']= 'form submitted';
   $add_product= "INSERT INTO products (productName, price, Image, product_category, description) 
    VALUES ('$productname', '$price', '$Image', '$productcategory', '$description' )";
    $stmt = $pdo->prepare($add_product);
    $stmt->execute();
    $_SESSION["successMsg"]="product added";
    
    header('Location: ../add-products.php');
}else {
    
    header('Location: ../add-products');
}
?>