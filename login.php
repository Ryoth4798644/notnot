<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass)) {
   echo "Заполните все поля";
} else {
$sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      // Ваш код для обработки регистрации
      
      // Если регистрация прошла успешно, выполните перенаправление на главную страницу
      header("Location: profile.main.html"); // Замените "index.html" на путь к вашей главной странице
      exit; // Убедитесь, что после вызова header() нет вывода на странице, иначе перенаправление может не сработать
      

    }
} else {
  echo "Нет такого пользователя";
}
}
