<?php

$connect = mysqli_connect('localhost', 'root', '', 'arina');

function checkVariables(...$variables)
{
    foreach ($variables as $variable) {
        if (empty($variable)) {
            echo "Поле не может быть пустым<br><a href='../index.php'>Назад</a>";
            die;
        }
    }
}