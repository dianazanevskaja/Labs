<?php
session_start();

// Удаление данных сеанса
session_unset();
session_destroy();

// Перенаправление на страницу входа
header("Location: login.php");
exit();
?>
