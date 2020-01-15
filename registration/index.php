<?php
  require_once "../connect.php";
  if (!empty($_POST)&&isset($_POST['send'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $error = null;
    if ($login != '' && $password != '') {
      $query ="INSERT INTO users VALUES(NULL, '$login','$password', 3)";
      $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
      if($result) {
        echo "пользователь создан";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Регистрация</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="login" placeholder="login" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" name="send" value="Зарегестрироваться">
  </form>
</body>
</html>