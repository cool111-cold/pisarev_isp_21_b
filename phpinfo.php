<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php 
        echo "<link rel='stylesheet' href=/style.css>"; 
        echo "<style>
@import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
</style>"
    ?>
</head>
<body>
   <?php
    echo "Поменять местами содержимое переменных A и B и вывести новые значения A и B.", "<BR><BR>";
    $a = 10;
    $b = 20;

    echo "Начальные значения: ", "a = $a", "b = $b", "<BR>";
    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "Новые значения: ", "a = $a", "b = $b", "<BR>";
    echo "С начала суток прошло N секунд (N — целое). Найти количество полных часов, прошедших с начала суток.", "<BR><BR>";
    $N = 3600;
    echo "Дано секунд: ", $N, " Результат: ", $N/3600;

    ?>
    
</body>
</html>