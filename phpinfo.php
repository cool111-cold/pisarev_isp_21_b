<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа</title>
    <?php 
        echo "<link rel='stylesheet' href=/style.css>"; 
        echo "<style>
@import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
</style>"
    ?>
</head>
<body>
  
   <?php
    echo "<header>Лабораторная работа 3</header>";
    echo "<div class='maintxt'> Поменять местами содержимое переменных A и B и вывести новые значения A и B.", "</div>";
    $a = 800;
    $b = 4;

    echo "<div> Начальные значения: ", "a = $a", " b = $b", "</div>";
    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "<div> Новые значения: ", "a = $a", " b = $b", "</div>";
    echo "<div class='maintxt'> С начала суток прошло N секунд (N — целое). Найти количество полных часов, прошедших с начала суток.</div>";
    $N = 7800;
    echo "<div>", "Дано секунд: ", $N, " Результат: ", round($N/3600), "</div> <BR>";
    
    echo "<div class='labtxt'> Лабораторная работа 4 </div>";
    echo "<div class='maintxt'> Дано трехзначное число. Проверить истинность высказывания: «Все цифры данного числа различны».", "</div>";
    $x = 446;
    $y = str_split(strval($x));
    if ($y[0] !== $y[1] and $y[0] !== $y[2] and $y[2] !== $y[1]) {
        echo "<div>Дано: ", $x, " Все цифры данного числа различны</div>";
    }else{
        echo "<div>Дано: ", $x, " Цифры данного числа не различны</div>";
    }
    echo "<div class='maintxt'> На числовой оси расположены три точки: A, B, C. Определить, какая из двух последних точек (B или C) расположена ближе к A, и вывести эту точку и ее расстояние от точки A.", "</div>";
    $A = 3;
    $B = 6;
    $C = 11;
    $AB = $B - $A;
    $AC = $C - $A;
    echo "<div>Дано: ", "A ", $A, " B ",$B, " C ",$C, "</div>";
    if (abs($AB) < abs($AC)) {
        echo '<div>B ближе, расстояние: ', abs($B-$A), '</div>';
    }else{
        echo '<div>C ближе, расстояние: ', abs($C-$A), '</div>';
    }
    $x = 5;
    $a = 4.27;
    $b = 1.39;
    echo "<img src='img/one.jpg'></img>";
    echo "<div>Дано: ", "X ", $x, " a ",$a, " b ",$b, "</div>";
    if ($x <= -2) {
        $res = sqrt($a * $x**2 + $b);
    }else if ($x > -2 and $x <= 4) {
        $res = cos(1/1+sqrt($a * abs($x)));
    }else if ($x > 4) {
        $res = log(abs($x + sin($b * $x)));
    }
    echo "<div>Результ: ", round($res, 2),"</div>";
    echo "<img src='img/two.jpg'></img>";
    $x = 7;
    echo "<div>Дано: ", "X ", $x, " a ",$a, " b ",$b, "</div>";
    if ($x == -3) {
        $res = sqrt($a * $x**2 + $b);
    }else if ($x == 3) {
        $res = acos(1/(1+sqrt($a * abs($x))));
    }else if ($x == 5) {
        $res = log(abs($x + sin($b * $x)));
    }
    echo "<div>Результ: ", round($res, 2),"</div>";

    
    
    echo "<footer>Выполнил Писарев Вадим ИСП21</footer>";
    ?>
</body>
</html>