<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма реєстрації</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffebf0;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #ff69b4;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #ff69b4;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ff1493;
        }

        .redirect {
            text-align: center;
            margin-top: 10px;
        }

        .redirect a {
            color: #ff69b4;
            text-decoration: none;
        }

        .redirect a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Реєстрація</h2>
        <form action="main.php" method="post">
            <label for="username">Логін:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Повторіть пароль:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">Зареєструватись</button>
        </form>

        <div class="redirect">
            <p>Вже маєте обліковий запис? <a href="login-page.php">Увійти</a></p>
        </div>
    </div>

</body>
</html>
