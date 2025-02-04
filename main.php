<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моторні мастила</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            background-color: #ffebf0;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1.5s ease-out;
        }

        h1 {
            text-align: center;
            color: #ff69b4;
            font-size: 32px;
            margin-bottom: 30px;
            animation: slideIn 1s ease-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }

        table {
            width: 100%;
            margin-bottom: 30px;
            border-collapse: collapse;
            animation: fadeIn 2s ease-out;
        }

        table th, table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #ff69b4;
            color: white;
        }

        .order-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
            animation: fadeIn 2s ease-out;
        }

        .order-form select, .order-form input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        .order-form button {
            width: 80%;
            padding: 10px;
            background-color: #ff69b4;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            animation: fadeIn 3s ease-out;
        }

        .order-form button:hover {
            background-color: #ff1493;
        }

        .contacts {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .contacts input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .footer {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .footer div {
            margin: 0 15px;
            padding: 20px;
            background-color: #ff69b4;
            border-radius: 10px;
            color: white;
        }

        .footer div:hover {
            background-color: #ff1493;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Моторні мастила</h1>

        <!-- Таблиця брендів -->
        <table>
            <thead>
                <tr>
                    <th>Бренд</th>
                    <th>Опис</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Castrol</td>
                    <td>Відомий виробник моторних мастил.</td>
                </tr>
                <tr>
                    <td>Shell</td>
                    <td>Знаменитий бренд у галузі мастил.</td>
                </tr>
                <tr>
                    <td>Mobil 1</td>
                    <td>Преміум якість для автомобілів.</td>
                </tr>
                <tr>
                    <td>Liqui Moly</td>
                    <td>Німецький виробник високоякісних мастил.</td>
                </tr>
            </tbody>
        </table>

        <!-- Форма для замовлення -->
        <div class="order-form">
            <h3>Замовити мастило</h3>
            <select id="engine-type">
                <option value="">Оберіть тип двигуна</option>
                <option value="petrol">Бензиновий</option>
                <option value="diesel">Дизельний</option>
            </select>

            <select id="oil-type">
                <option value="">Оберіть тип мастила</option>
                <option value="10w40">10W-40</option>
                <option value="5w30">5W-30</option>
                <option value="sae-30">SAE 30</option>
                <option value="sae-40">SAE 40</option>
            </select>

            <button type="button">Замовити</button>
        </div>

        <!-- Контакти -->
        <div class="contacts">
            <h3>Контакти</h3>
            <input type="text" placeholder="Введіть контактні дані">
        </div>

        <!-- Пусті поля -->
        <div class="footer">
            <div><input type="text" placeholder="Пусте поле 1"></div>
            <div><input type="text" placeholder="Пусте поле 2"></div>
            <div><input type="text" placeholder="Пусте поле 3"></div>
        </div>
    </div>

</body>
</html>
