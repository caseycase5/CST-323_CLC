<!--
Stephan Moncavage
CST-236
eCommerce Site Milestone Project
Milestone 3
14 March 2021
-->
<?php
session_start();

include "myfuncs.php";
include "db.php";

function editUser($user){
    $rowId = $_SESSION['rowID'];
    $conn = dbConnect();
    $query = "Update ".$user. " FROM users WHERE id = '$rowId' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header("Location: ./Store.php");
    return $result;
}

function editProduct($product){
    $rowId = $_SESSION['rowID'];
    $conn = dbConnect();
    $query = "UPDATE ".$product. " FROM products WHERE id = '$rowId' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header("Location: ./Store.php");
    return $result;
}

function editQuantity ($product){
    
}


?>