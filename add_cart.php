<?php 
session_start();
require_once 'include/db.php';
$product_id = $_GET['pro'];
$cid = $_SESSION['uid'];
$query = "INSERT INTO cart VALUES(NULL,'$product_id','$cid')";
$result = mysqli_query($conn,$query);
if($result){
    $_SESSION['success'] = "Product Added to cart successfully";
    header('location:cart.php');
}
?>