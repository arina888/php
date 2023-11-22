<?php

require_once '../connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$count = $_POST['count'];
checkVariables($name, $price, $count);

mysqli_query($connect, "INSERT INTO `products` (`id`,`name`, `price`, `count`, `isArchive`) VALUES (NULL, '$name', '$price', '$count', 0)");

header('Location: ../index.php');