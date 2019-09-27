<?php
$pdo= new PDO("mysql:host=127.0.0.1; dbname=sendmail", "root", ""); //подключение к БД



$sql = "INSERT INTO email (username, email, textmessage) values ('$username', '$email', '$textmessage')"; //Сам запрос
$statement = $pdo->prepare($sql);// Подготовление запроса
$statement->execute($_POST); //true || false


header("Location: http://level1.local/index.php");
