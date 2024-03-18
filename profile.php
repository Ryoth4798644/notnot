<?php
$user_id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "", "PanicaUsers")
$query= mysqli_query($db, "SELECT * FROM `Users` WHERE `id` = '{user_id}' ");
$array = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль <?php= $array['login']  ?> </title>
</head>
<body>
    <h1>
      Дата регистрации <?php= $array['reg_date']   ?>
    </h1>
</body>
</html>