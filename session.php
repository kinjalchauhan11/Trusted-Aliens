<?php
require('DB_conn.php');
$Product_ID = $_GET['Product_ID'];
$getProductQuery = "SELECT * from products where Product_ID = $Product_ID";
$productResult = mysqli_query($conn, $getproductQuery);
if (mysqli_num_rows($productResult) == 1) {
    session_start();
    $product = mysqli_fetch_row($productResult);
    $_SESSION['Product_ID'] = $products[0];
    $_SESSION['Product_name'] = $products[1];
    $_SESSION['Username'] = $products[2];
    $_SESSION['Product_picture'] = $products[3];
    $_SESSION['Product_price'] = $products[4];
   
    header("Location: home.php");
}
?>