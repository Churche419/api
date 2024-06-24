<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once "config/db-connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $inputData = json_decode(file_get_contents('php://input'), true);


    $sql = "INSERT INTO products (productName, price, Image, product_category, description) VALUES (:productName, :price, :Image, :product_category, :description)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($inputData);

    if($stmt->rowCount() > 0){
        echo "Insert success";
    }else{
        echo "Error in inserting employee";
    }
}else{
    echo 'Method not allowed';
}
?>
