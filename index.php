<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        a {
            text-decoration: none;
            color: #1877f2;
            margin: 0 15px;
            font-size: 18px;
        }
        a:hover {
            text-decoration: underline;
        }
        .welcome-message {
            font-size: 24px;
            color: #1c1e21;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_COOKIE['User'])) {
            echo '<div class="welcome-message">Добро пожаловать, ' . htmlspecialchars($_COOKIE['User']) . '</div>';
        } else {
            echo '<a href="login.php">Вход</a> | <a href="register.php">Регистрация</a>';
        }
        ?>
    </div>
</body>
</html>