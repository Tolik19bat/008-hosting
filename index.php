<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать!</title>
</head>
<body>
    <?php
    if (!empty($_SESSION['username'])) {
        // Если в сессии есть имя пользователя, поприветствовать его
        echo "<h1>Привет, " . htmlspecialchars($_SESSION['username']) . "!</h1>";
        echo '<a href="exit.php">Выйти</a>';
    } else {
        // Если имени нет, отобразить форму
        include 'form.php';
    }
    ?>
</body>
</html>
