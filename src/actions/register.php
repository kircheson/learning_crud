<?php
require_once __DIR__ . '/../helper_functions.php';

// Выносим данные из формы, распределяем по назначенным переменным:
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirmation = $_POST['password_confirmation'];

// Выполняем валидацию полученных данных с формы

if (empty($name)) {
    setValidationError('username', '<b>Ошибка! Неверное имя</b>');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setValidationError('email', '<b>Ошибка! Неверный email</b>');
}
if (empty($password)) {
    setValidationError('password', '<b>Ошибка! Пустой пароль</b>');
}
if ($password !== $passwordConfirmation) {
    setValidationError('password', '<b>Ошибка! Пароли не совпадают</b>');
}

// Если список с ошибками валидации не пустой, то производим редирект обратно на форму

if (!empty($_SESSION['validation'])) {
    setOldValue('username', $name);
    setOldValue('email', $email);
    redirect('../../pages/registration.php');
}

//  Отправляем форму
$pdo = getPDO();

$query = "INSERT INTO users (`username`, `email`, `password`) VALUES (:username, :email, :password)";

$params = ['username' => $name,'email' => $email,'password' => password_hash($password, PASSWORD_DEFAULT)];

$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/');



//$conn = new mysqli("localhost", "root", "1", "reg_form_homework");
//// Создание нового объекта класса mysqli для установления соединения с базой данных. В параметрах указывается
//// хост (localhost), имя пользователя (root), пароль (1) и имя базы данных (regformhomework).
//if ($conn->connect_error) { // Проверка подключения с условием.
//    die("Connection failed: " . $conn->connect_error); // Если была ошибка подключения, то скрипт останавливается,
//    // выводится сообщение "Connection failed: " и ошибка подключения.
//} else { // Если подключение прошло успешно, то выполняется следующий блок кода.
//    echo 'Мы успешно подключились' . PHP_EOL; // Ура, мы подключились и выполнили код далее по тексту.
//}
//$conn->query("INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$_POST[username]', '$_POST[email]','$_POST[password]')");
//// Выполнение запроса к базе данных для вставки новой записи в таблицу users. Значения для полей указаны в скобках,
//// значения разделяются запятыми.
