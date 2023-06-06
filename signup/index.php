<?php

session_start();

if (isset($_SESSION["user"])) {
    header("Location: /index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Регистрация</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

<div class="main-container">
    <form action="/include/signup.php" method="post" id="reg-form">
        <span class="auth-title">Кто-то новенький?</span>

        <div class="tabs">
            <div class="tab" style="display: contents">
                <input type="text" name="first_name" placeholder="Имя">
                <input type="text" name="last_name" placeholder="Фамилия">
            </div>

            <div class="tab">
                <input type="text" name="login" placeholder="Логин">
                <input type="email" name="email" placeholder="Почта">
            </div>

            <div class="tab">
                <input type="password" name="password" placeholder="Пароль">
                <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
            </div>
        </div>

        <input type="button" id="next-btn" onclick="swapTab(+1)" value="Далее">
        <a id="back-btn" onclick="swapTab(-1)">Назад</a>

        <span class="have-acc">Уже есть аккаунт? — <a href="/login/">Войти</a>.</span>
    </form>
    <a class="error-mes" id="signup-error">ㅤ</a>
</div>

</body>
</html>

<script src="script.js"></script>
