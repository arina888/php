<?php

require_once 'connect.php';

$deletedItems = mysqli_query($connect, "SELECT id, name FROM products WHERE isArchive = 1");
$deletedItems = mysqli_fetch_all($deletedItems);

$item = [];

foreach ($deletedItems as $deletedItem) {
    $item[$deletedItem[0]] = $deletedItem[1];
}

session_start();
$_SESSION['deletedItems'] = $item;