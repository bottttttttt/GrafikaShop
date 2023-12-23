<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="ru" data-theme="light">
<?php include_once __DIR__ . '/components/head.php'?>
<form class="card font-rubik" action="src/actions/login.php" method="post">
<head>
    <meta charset="UTF-8">
    <title>Grafika</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма авторизации -->

    <form>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit" class="login-btn text-white" >Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <a href="index.php" class="logout">Вернуться к сайту</a>
        <p class="msg none">Lorem ipsum dolor sit amet.</p>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    </form>
    <?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>