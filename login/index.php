<?php
  require_once "../connect.php";
  session_start();
  if (!empty($_POST)&&isset($_POST['send'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $error = null;

    $query ="SELECT * FROM users WHERE login='$login'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
      $rows = mysqli_num_rows($result);
      echo "rows $rows";
      if ($rows > 0) {
        for ($i = 0 ; $i < $rows ; ++$i){
          $row = mysqli_fetch_row($result);
          // print_r($row);
          if ($row[2] == $password) {
            echo "авторизовано";
            $_SESSION['userid'] = $row[0];
            header('Location:/exam');
          } else {
            $error = 'Неверный пароль';
          }
        }
      } else {
        $error = 'Пользователя с таким логином не существует';
      }
    } else {
      $error = 'Ошибка доступа к бд';
    }

    if ($error) {
      echo "Ошибка: $error";
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Авторизация</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="send">
  </form>
</body>
</html>