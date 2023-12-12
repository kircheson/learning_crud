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
<form method="POST" action="./login_run.php">
    <div class="container">
        <h1 class="container__title">ВХОД</h1>

        <div class="container__form">
            <label class="container__form-label" for="login">Логин
                <input class="container__form-input" type="text" placeholder="Введите логин..." id="username"  name="username"  required>
            </label>

            <label class="container__form-label" for="password">Пароль
                <input class="container__form-input" type="text" placeholder="Введите пароль..." id="password" name="password" required>
            </label>

            <button class="container__form-button">Войти</button>
        </div>

        <div class="container__registration">
            <a class="container__registration-link" href="./registration.php">У меня нет аккаунта</a>
        </div>
    </div>
</body>
</html>
