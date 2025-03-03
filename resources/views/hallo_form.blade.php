<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма пользователя</title>
</head>
<body>
    <h1> Привет имя<h1>
    <form action="/store_form" method="POST">
        @csrf
        <div>
            <label for="first_name">Имя:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div>
            <label for="last_name">Фамилия:</label>
            <input type="text" id="last_name" name="last_name" required>
</div>
        <div>
            <button type="submit">Отправить</button>
        </div>
    </form>
</body>
</html>
