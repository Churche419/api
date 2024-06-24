<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<br><form action="processes/add-employees-process.php" method="POST">
    <div class="mb-3">
        <label for="productName" class="form-label">product name</label>
        <input type="text" class="form-control" name="productName" id="productName">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="text" class="form-control" name="price" id="price">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="text" class="form-control" name="image" id="image">
    </div>
    <div class="mb-3">
        <label for="productCategory" class="form-label">product category</label>
        <input type="text" class="form-control" name="productCategory" id="productCategory">
    </div>
    <div class="mb-3">
        <label for="Description" class="form-label">Description</label>
        <input type="number" class="form-control" name="Description" id="Description">
    </div>
    
    <button type="submit" name="send" class="btn btn-primary">Submit</button>
    <?php 
    if (isset($_SESSION['successMsg'])) {
        echo $_SESSION['successMsg'];
    }
    ?>
    
</form>
</body>
</html>
</body>
</html>