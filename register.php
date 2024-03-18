<?php
 require_once("db.php");
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];


if(empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
 echo "Заполните все поля!";
}

{
    if($pass != $repeatpass) {
       echo "Пароли не совпадают";
    } else {
        $sql = "INSERT INTO  `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
          if ($conn -> query($sql) === TRUE) {
          echo "Успешная регистрация";
          }
          else {
          echo "Ошибка:" . $conn->error;
          }
    }
}

// Ваш код для обработки регистрации

// Если регистрация прошла успешно, выполните перенаправление на главную страницу
header("Location: profile.main.html"); // Замените "index.php" на путь к вашей главной странице
exit; // Убедитесь, что после вызова header() нет вывода на странице, иначе перенаправление может не сработать

