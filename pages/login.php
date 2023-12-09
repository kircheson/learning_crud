<?php
session_start();
//require_once __DIR__ . '../src/helper_functions.php';
//require_once __DIR__ . '../src/actions/register.php';
$_GET['auth'] = 0;

//// Проверяем, была ли отправлена форма
//if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
//    // Подключение к базе данных (здесь предполагается, что у вас уже создано подключение к базе данных)
//
//    // Проверка подключения
//    $link = mysqli_connect("localhost", "username", "password", "reg_form_homework");
//
//    if ($link == false) {
//        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
//    }
//
//    // Получение введенного логина и пароля из формы
//    $login = $_POST["login"];
//    $password = $_POST["password"];
//
//    // Подготовка SQL-запроса для проверки логина и пароля в базе данных
//    $sql = "SELECT * FROM users WHERE login='$login' AND password='$password'";
//
//    // Выполнение SQL-запроса
//    $result = $link->query($sql);
//
//    // Проверка, найден ли пользователь с такими логином и паролем
//    if ($result->num_rows > 0) {
//        // Пользователь авторизован
////        записать в $_SESSION логин и сам факт того, что он авторизован
//        echo "Пользователь успешно авторизован!";
//    } else {
//        // Неправильный логин или пароль
//        echo "Неправильный логин или пароль";
//    }
//
//    // Закрываем соединение с базой данных
//    $conn->close();
//}
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Montserrat:ital,wght@0,300;1,300&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Montserrat:ital,wght@0,700;1,300&display=swap"
          rel="stylesheet">
</head>

<body>
<form method="POST" action="">
    <?php if ( $_SESSION['auth']) { ?>
        <h1> Вы <?php echo $_SESSION['login'] ?> успешно авторизовались</h1>
    <?php } else { ?>
    <?php if ( $_GET['auth'] ) { ?>
    <div class="container">
        <h1 class="container__title">ВХОД</h1>

        <div class="container__form">
            <label class="container__form-label" for="login">Логин
                <input class="container__form-input" type="text" placeholder="Введите логин..." id="login" required>
            </label>

            <label class="container__form-label" for="password">Пароль
                <input class="container__form-input" type="text" placeholder="Введите пароль..." id="password" required>
            </label>

            <button class="container__form-button">Войти</button>
        </div>

        <div class="container__registration">
            <a class="container__registration-link" href="./pages/registration.php">У меня нет аккаунта</a>
        </div>
    </div>
</body>
</html>