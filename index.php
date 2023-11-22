<html>
<head>
    <title>Мой проект</title>
</head>
<body>
<?php
require_once 'connect.php';
//require_once 'migration.php';
require_once 'CRUD/read.php';
require_once 'CRUD/recoverList.php';
?>

<form method="post" action="CRUD/create.php">
    <p>Добавить товар </p>
    <label for="name">Название: </label>
    <input type="text" name="name">
    <label for="count">Количество: </label>
    <input type="text" name="count">
    <label for="price">Цена: </label>
    <input type="text" name="price">
    <input type="submit" value="Добавить">
    <br>
</form>
<hr>

<form action="CRUD/updatePrice.php" method="post">
    <p>Изменить цену </p>
    <label for="updId">id товара: </label>
    <input type="text" name="updId">
    <label for="newPrice">Новая цена: </label>
    <input type="text" name="newPrice">
    <input type="submit" value="Изменить">
</form><br>
<hr>
<form action="CRUD/updateCount.php" method="post">
    <p>Купить товар </p>
    <label for="updId">id товара: </label>
    <input type="text" name="productId">
    <input type="submit" value="Купить">
</form><br>
<hr>
<form action="CRUD/delete.php" method="post">
    <p>Удаление товара </p>
    <label for="delId">id товара: </label>
    <input type="text" name="delId">
    <input type="submit" value="Удалить">
</form>
<hr>
<form method="post" action="CRUD/recover.php">
    <select id="propertySelect" name="recoverId">
        <?php
        session_start();
        if (isset($_SESSION['deletedItems']) && !empty($_SESSION['deletedItems'])) {
            foreach ($_SESSION['deletedItems'] as $key => $value) {
                echo '<option value="' . $key . '">' . $value . '</option>';
            }
        } else {
            echo '<option value="-1">Нет доступных элементов</option>';
        }
        session_abort();
        ?>
    </select>
    <button type="sumbit">Восстановить</button>
    <br>
</body>
</html>
