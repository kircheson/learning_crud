<?php
require_once __DIR__ . './../src/helper_functions.php';
checkGuest();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Montserrat:ital,wght@0,300;1,300&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Montserrat:ital,wght@0,700;1,300&display=swap"
          rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="container__title">РЕГИСТРАЦИЯ</h1>

    <div class="container__form">
        <form class="card" action="./../src/actions/register.php" method="post">
            <label class="container__form-label" for="username">
                Имя

                <?php if (hasValidationError('username')): ?>
                    <small><?php echo validationErrorMessage('username'); ?></small>
                <?php endif; ?>
            </label>
            <input type="text" id="username" class="container__form-input" placeholder="Введите логин" name="username"
                   value="<?php echo old('name') ?>"<?php echo validationErrorAttr('name'); ?>>
            <label class="container__form-label" for="email">
                Почта
                <?php if (hasValidationError('email')): ?>
                    <small><?php echo validationErrorMessage('email'); ?></small>
                <?php endif; ?>
            </label>
            <input type="text" id="email" class="container__form-input" placeholder="Введите email" name="email"
                   value="<?php echo old('email') ?>"<?php echo validationErrorAttr('email'); ?>>
            <label class="container__form-label" for="password">
                Пароль
                <?php if (hasValidationError('password')): ?>
                    <small><?php echo validationErrorMessage('password'); ?></small>
                <?php endif; ?>
            </label>
            <input type="password" id="password" class="container__form-input" placeholder="Введите пароль"
                   name="password"<?php echo validationErrorAttr('password'); ?>>
            <label class="container__form-label" for="password">
                Подтверждение
            </label>
            <input type="password" id="password_confirmation" class="container__form-input"
                   placeholder="Повторите пароль" name="password_confirmation">

            <input type="submit" id="submit" class="container__form-button" name="submit" value="Зарегистрироваться">
        </form>
    </div>

    <div class="container__registration">
        <p>У меня уже есть <a href="../pages/profile.html">аккаунт</a></p>
    </div>
</div>
</body>
</html>
