<?php

require_once('connect.php');

mysqli_query($connect, "INSERT INTO products (`id`,`name`, `price`, `count`, `isArchive`) VALUES 
                                                                       (1,'Подушка','100','200',0),
                                                                       (2,'Одеяло','50','1000',0),
                                                                       (3,'Стол','3','10000',0),
                                                                       (4,'Монитор','10','30',0),
                                                                       (5,'Голубь','1','754353453',0),
                                                                       (6,'Приколы','1233434','4324325',0)");