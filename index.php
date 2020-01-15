<?php
 require_once "connect.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php 
  session_start();
  if (!isset($_SESSION['userid'])) {
    echo "Не авторизовано";
    // header('Location:'.$login_page);
  }
    echo "авторизовано";

  // $query ="SELECT * FROM users";
  // $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
  // if($result)
  // {
  //     $rows = mysqli_num_rows($result); // количество полученных строк
  //     echo "<table><tr><th>Id</th><th>Login</th><th>Password</th></tr>";
  //     for ($i = 0 ; $i < $rows ; ++$i)
  //     {
  //         $row = mysqli_fetch_row($result);
  //         print_r($row);
  //         echo "<tr>";
  //             for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
  //         echo "</tr>";
  //     }
  //     echo "</table>";
       
  //     // очищаем результат
  //     mysqli_free_result($result);
  // } 
  // mysqli_close($link);
?>
</body>
</html>