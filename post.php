<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['username'])) {
    // Сохраняем имя пользователя в сессию
    $_SESSION['username'] = $_POST['username'];
}

// Перенаправляем обратно на index.php
header('Location: index.php');
exit();
