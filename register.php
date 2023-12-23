<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="ru" data-theme="light">
<?php include_once __DIR__ . '/components/head.php'?>
<form class="card" action="src/actions/login.php" method="post">
<head>
    <meta charset="UTF-8">
    <title>Grafika</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form>
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit" class="register-btn text-white">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="login.php">авторизируйтесь</a>!
        </p>
        <a href="index.php" class="logout">Вернуться к сайту</a>

        <p class="msg none">Lorem ipsum.</p>
    </form>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    </form>
</body>
</html>