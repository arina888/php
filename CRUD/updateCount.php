<?php

require_once '../connect.php';

$id = $_POST['productId'];
checkVariables($id);

$count = mysqli_query($connect, "SELECT count FROM products WHERE id = '$id'");
$count = mysqli_fetch_assoc($count)['count'];
if ($count > 0) {
    $count--;
    mysqli_query($connect, "UPDATE products SET count = '$count' WHERE id = '$id'");
} else {
    mysqli_query($connect, "UPDATE products SET isArchive = 1 WHERE id = '$id'");
}

header('Location: ../index.php');