<?php

require_once '../connect.php';

$delId = $_POST['delId'];
checkVariables($delId);

mysqli_query($connect, "UPDATE products SET isArchive = 1 WHERE id = '$delId'");

header('Location: ../index.php');