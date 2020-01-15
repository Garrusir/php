<?php
     $host = 'localhost'; // адрес сервера 
     $database = 'typography'; // имя базы данных
     $user = 'root'; // имя пользователя
     $password = '1256'; // пароль

     $link = mysqli_connect($host, $user, $password, $database) 
      or die("Ошибка " . mysqli_error($link));
?>