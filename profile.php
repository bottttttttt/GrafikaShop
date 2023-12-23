<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
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

    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;">С возвращением, <?= $_SESSION['user']['full_name'] ?>!</h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
         <!-- <a href="vendor/logout.php" class="logout">Выйти</a> -->
        <br><br><a href="index.php" class="logout">Перейти к сайту</a>
    </form>
    </form>
    <?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>