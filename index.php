<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Веб-страница с изображениями</title>
    <style>
        /* Стили для меню, контента и футера */
        nav {
            background-color: #444;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }
        nav a:hover {
            background-color: #555;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .gallery img {
            width: 200px;
            height: 200px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#">About</a>
        <a href="#">Photos</a>
        <a href="#">Contacts</a>
    </nav>
    <div class="content">
        <!-- Ваш контент -->
        <h2>#Photos</h2>
    
    </div>
    <div class="gallery">
        <?php
        // Задаем путь к папке с изображениями
        $dir = 'image/';
        // Сканируем содержимое директории
        $files = scandir($dir);
        // Если нет ошибок при сканировании
        if ($files !== false) {
            // Начинаем выводить изображения
            foreach ($files as $file) {
                // Пропускаем текущий каталог и родительский
                if ($file != "." && $file != "..") {
                    // Получаем путь к изображению
                    $path = $dir . $file;
                    // Выводим изображение на экран с фиксированным размером
                    echo "<img src='$path' alt='Изображение'>";
                }
            }
        }
        ?>
    </div>
    <footer>
        <p>USM 2024</p>
    </footer>
</body>
</html>
