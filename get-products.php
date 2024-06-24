<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once "config/db-connect.php";


if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(isset($_GET['id'])){
        $GET = filter_var_array($_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id = $GET['id'];
        $sql = 'SELECT * FROM products WHERE id = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($product) {
            echo json_encode($product);
        } else {
            echo 'Employee not found.';
        }
    }else{
        $sqli = 'SELECT * FROM products';
        $stmtt = $pdo->prepare($sqli);
        $stmtt->execute();
        $products = $stmtt->fetchAll(PDO::FETCH_ASSOC);


        if ($products) {
            echo json_encode($products);
        } else {
            echo 'No employees found.';
        }
    }
}
else{
    echo 'Method not allowed.';
}