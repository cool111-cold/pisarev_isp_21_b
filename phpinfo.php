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
    echo "<div class='main'>";
    echo "    <div class='main_lab'>";
    echo "       <div class='main_lab-name'>03</div>";

    echo "        <div class='task one'>";
    echo "            <div class='task_num'>01</div>";
    echo "            <div class='task_info'>";
    echo "                <div class='task_info-txt'>Поменять местами содержимое переменных A и B и вывести новые значения A и B</div>";
    echo "                <div class='task_info-res'>";

    $a = 80;
    $b = 4;

    echo "                    <div class='res_before'>$a $b</div>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "                    <img src='free-icon-atom-9178189.png' class='load'>";
    echo "                    <div class='res_after'>$a $b</div>";

    echo "                </div>";
    echo "            </div>";
    echo "        </div>";

    echo "        <div class='task two'>";
    echo "            <div class='task_num'>02</div>";
    echo "            <div class='task_info'>";
    echo "                <div class='task_info-txt'>С начала суток прошло N секунд (N — целое). Найти количество полных часов, прошедших с начала суток.</div>";
    echo "                <div class='task_info-res'>";

    $N = 3600;
    echo "                    <div class='res_before'>$N</div>";
    echo "                    <img src='free-icon-atom-9178189.png' class='load'>";
    echo "                    <div class='res_after'>" . round($N/3600) . "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

    echo "<div class='main_lab'>";
    echo "    <div class='main_lab-name'>04</div>";

    echo "    <div class='task three'>";
    echo "        <div class='task_num'>01</div>";
    echo "        <div class='task_info'>";
    echo "            <div class='task_info-txt'>Дано трехзначное число. Проверить истинность высказывания: «Все цифры данного числа различны</div>";
    echo "            <div class='task_info-res'>";

    $x = 123;
    $y = str_split(strval($x));
    if ($y[0] !== $y[1] and $y[0] !== $y[2] and $y[2] !== $y[1]) {
        echo "                <div class='res_before'>$x</div>";
        echo "                <img src='free-icon-atom-9178189.png' class='load'>";
        echo "                <div class='res_after'>Все цифры различны</div>";
    } else {
        echo "                <div class='res_before'>$x</div>";
        echo "                <img src='free-icon-atom-9178189.png' class='load'>";
        echo "                <div class='res_after'>Цифры не различны</div>";
    }

    echo "            </div>";
    echo "        </div>";
    echo "    </div>";

    echo "    <div class='task four'>";
    echo "        <div class='task_num'>02</div>";
    echo "        <div class='task_info'>";
    echo "            <div class='task_info-txt'>На числовой оси расположены три точки: A, B, C. Определить, какая из двух последних точек (B или C) расположена ближе к A, и вывести эту точку и ее расстояние от точки A</div>";
    echo "            <div class='task_info-res'>";

    $A = 3;
    $B = 6;
    $C = 11;
    $AB = $B - $A;
    $AC = $C - $A;
    echo "                <div class='res_before'>$A $B $C</div>";
    if (abs($AB) < abs($AC)) {
        echo "                <img src='free-icon-atom-9178189.png' class='load'>";
        echo "                <div class='res_after'>B " . abs($B - $A) . "</div>";
    } else {
        echo "                <img src='free-icon-atom-9178189.png' class='load'>";
        echo "                <div class='res_after'>C " . abs($C - $A) . "</div>";
    }

    echo "            </div>";
    echo "        </div>";
    echo "    </div>";

    echo "    <div class='task five'>";
    echo "        <div class='task_num'>03</div>";
    echo "        <div class='task_info'>";
    echo "            <div class='task_info-txt'><img src='img/one.jpg' alt=''></div>";
    echo "            <div class='task_info-res'>";

    $x = 5;
    $a = 4.27;
    $b = 1.39;
    if ($x <= -2) {
        $res = sqrt($a * $x ** 2 + $b);
    } elseif ($x > -2 and $x <= 4) {
        $res = cos(1 / (1 + sqrt($a * abs($x))));
    } elseif ($x > 4) {
        $res = log(abs($x + sin($b * $x)));
    }
    echo "                <div class='res_before'>$x</div>";
    echo "                <img src='free-icon-atom-9178189.png' class='load'>";
    echo "                <div class='res_after'>" . round($res, 2) . "</div>";

    echo "            </div>";
    echo "        </div>";
    echo "    </div>";

    echo "    <div class='task five'>";
    echo "        <div class='task_num'>04</div>";
    echo "        <div class='task_info'>";
    echo "            <div class='task_info-txt'><img src='img/two.jpg' alt=''></div>";
    echo "            <div class='task_info-res'>";

    $x = 3;
    if ($x == -3) {
        $res = sqrt($a * $x ** 2 + $b);
    } elseif ($x == 3) {
        $res = acos(1 / (1 + sqrt($a * abs($x))));
    } elseif ($x == 5) {
        $res = log(abs($x + sin($b * $x)));
    }
    echo "                <div class='res_before'>$x</div>";
    echo "                <img src='free-icon-atom-9178189.png' class='load'>";
    echo "                <div class='res_after'>" . round($res, 2) . "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

        echo "<div class='main_lab'>";
    echo "    <div class='main_lab-name'>05</div>";

    echo "    <div class='task one'>";
    echo "        <div class='task_num'>01</div>";
    echo "        <div class='task_info'>";
    echo "            <div class='task_info-txt'>Дано целое число N (> 1) и набор из N вещественных чисел. Проверить,  образует  ли  данный  набор  возрастающую  последовательность.  Если образует, то вывести TRUE, если нет — вывести FALSE</div>";
    echo "            <div class='task_info-res'>";

    $N = 5;
    $numbers = [1.1, 2.5, 3.7, 4.0, 5.2];
    $res = true;
    for ($i = 1; $i < $N; $i++) {
        if ($numbers[$i] <= $numbers[$i - 1]) {
            $res = false;
            break;
        }
    }
    $num = implode(" ", $numbers);
    if ($N > 1 and $res == true) {
        echo "                <div class='res_before'>$num</div>";
        echo "                <img src='free-icon-atom-9178189.png' class='load'>";
        echo "                <div class='res_after'>TRUE</div>";
    } else if ($N > 1 and $res == false) {
        echo "                <div class='res_before'>$num</div>";
        echo "                <img src='free-icon-atom-9178189.png' class='load'>";
        echo "                <div class='res_after'>FALSE</div>";
    }

    echo "            </div>";
    echo "        </div>";
    echo "    </div>";

    echo "    <div class='task two'>";
    echo "        <div class='task_num'>02</div>";
    echo "        <div class='task_info'>";
    echo "            <div class='task_info-txt'>Дано целое число N (> 0). Используя один цикл, найти сумму 1! + 2! + 3! + . . . + N ! (выражение N! —  N–факториал —  обозначает произведение  всех целых чисел от 1 до N :    N! = 1·2·. . .·N )</div>";
    echo "            <div class='task_info-res'>";

    function factorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    $N = 5;
    $sum = 0;
    for ($i = 1; $i < $N+1; $i++) {
        $sum += factorial($i);
    }
    if ($N > 0) {
        echo "                <div class='res_before'>$N</div>";

        echo "                <img src='free-icon-atom-9178189.png' class='load'>";
        echo "                <div class='res_after'>$sum</div>";
    }


    echo "            </div>";
    echo "        </div>";
    echo "    </div>";

    echo "            </div>";
    echo "        </div>";
    echo "    </div>";

    echo "</div>";

?>


</body>
</html>