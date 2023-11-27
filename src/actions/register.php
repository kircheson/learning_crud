<?php
var_dump($_POST);
if (!empty($_POST) && isset($_POST['submit'])) {
    echo $_POST['username'];
}


$conn = new mysqli("localhost", "root", "1", "reg_form_homework");
// Создание нового объекта класса mysqli для установления соединения с базой данных. В параметрах указывается
// хост (localhost), имя пользователя (root), пароль (1) и имя базы данных (regformhomework).
if ($conn->connect_error) { // Проверка подключения с условием.
    die("Connection failed: " . $conn->connect_error); // Если была ошибка подключения, то скрипт останавливается,
    // выводится сообщение "Connection failed: " и ошибка подключения.
} else { // Если подключение прошло успешно, то выполняется следующий блок кода.
    echo 'Мы успешно подключились' . PHP_EOL; // Ура, мы подключились и выполнили код далее по тексту.
}
$conn->query("INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$_POST[username]', '$_POST[email]','$_POST[password1]')");
// Выполнение запроса к базе данных для вставки новой записи в таблицу users. Значения для полей указаны в скобках,
// значения разделяются запятыми.
