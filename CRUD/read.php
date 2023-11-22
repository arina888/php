<?php

require_once 'connect.php';

$products = mysqli_query($connect, "SELECT * FROM products WHERE isArchive = 0");
$products = mysqli_fetch_all($products);

$table = "<table cellspacing='2' border='1' cellpadding='5' width='600'><tr>
<td>id</td>
<td>Название</td>
<td>Цена</td>
<td>Количество</td>";

foreach ($products as $product) {
    $table .= "<tr>
<td>$product[0]</td>
<td>$product[1]</td>
<td>$product[2]</td>
<td>$product[3]</td>
</tr>";
};

$table .= '</tr></tr>';

echo $table;