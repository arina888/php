<?php

require_once '../connect.php';

$updateId = $_POST['updId'];
$newPrice = $_POST['newPrice'];
checkVariables($newPrice, $updateId);

mysqli_query($connect, "UPDATE products SET price = '$newPrice' WHERE id = '$updateId'");

header('Location: ../index.php');