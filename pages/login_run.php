<?php
//require_once __DIR__ . './../src/actions/register.php';

$name = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli("localhost", "root", "1", "reg_form_homework");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (empty($name) || empty($password)) {
    echo 'Заполните пожалуйста все поля';
} else {
    $sql = "SELECT * FROM `users` WHERE (username = '$name' AND password = '$password')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo 'Добро пожаловать, ' . $name . ' вы успешно авторизованы!';
        }
    } else {
        echo 'Ошибка авторизации. Нет такого пользователя :(';
    }
}