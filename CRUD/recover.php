<?php

require_once '../connect.php';

$recoverId = $_POST['recoverId'];
checkVariables($recoverId);

mysqli_query($connect, "UPDATE products SET isArchive = 0 WHERE id = '$recoverId'");

header('Location: ../index.php');
