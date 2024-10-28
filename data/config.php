<?php
    function matrix($n){
        $elementSeparator = ', ';
        $rowSeparator = '<br>';
        $formattedRows = array_map(function($row) use ($elementSeparator) {
            return implode($elementSeparator, $row);
        }, $n);
        $output = implode($rowSeparator, $formattedRows);
        return $output;
    }
    /*01*/
    $a = 80;
    $b = 4;
    /*02*/
    $N = 3600;
    /*03*/
    $xOne = 123;
    $yOne = str_split(strval($xOne));
    if ($yOne[0] !== $yOne[1] and $yOne[0] !== $yOne[2] and $yOne[2] !== $yOne[1]) {
        $resOne = 'Все цифры различны';
    } else {
        $resOne = 'Цифры не различны';
    }
    /*04*/
    $A = 3;
    $B = 6;
    $C = 11;
    $AB = $B - $A;
    $AC = $C - $A;
    if (abs($AB) < abs($AC)) {
        $resTwo = "B " . abs($B - $A);
    } else {
        $resTwo = "C " . abs($C - $A);
    }
    /*05*/
    $xTwo = 5;
    $aTwo = 4.27;
    $bTwo = 1.39;
    if ($xTwo <= -2) {
        $resThree = sqrt($aTwo * $xTwo ** 2 + $bTwo);
    } elseif ($xTwo > -2 and $xTwo <= 4) {
        $resThree = cos(1 / (1 + sqrt($aTwo * abs($xTwo))));
    } elseif ($xTwo > 4) {
        $resThree = log(abs($xTwo + sin($bTwo * $xTwo)));
    }
    /*06*/
    $xThree = 3;
    if ($xThree == -3) {
        $resFour = sqrt($aTwo * $xThree ** 2 + $bTwo);
    } elseif ($xThree == 3) {
        $resFour = acos(1 / (1 + sqrt($aTwo * abs($xThree))));
    } elseif ($xThree == 5) {
        $resFour = log(abs($xThree + sin($bTwo * $xThree)));
    }
    /*07*/
    $Ntwo = 3;
    $numbers = [1, 2, 3];
    $resFive = true;
    for ($i = 1; $i < $Ntwo; $i++) {
        if ($numbers[$i] <= $numbers[$i - 1]) {
            $resFive = false;
            break;
        }
    }
    $num = implode(" ", $numbers);
    if ($Ntwo > 1 and $resFive == true) {
        $resSix = 'TRUE';
    } else if ($Ntwo > 1 and $resFive == false) {
        $resSix = 'FALSE';
    }
    /*08*/
    function factorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    $Nthree = 5;
    $sum = 0;
    for ($i = 1; $i < $Nthree+1; $i++) {
        $sum += factorial($i);
    }
    /*09*/
    $Alist = [1,1,1];
    $Amax = 0;
    for ($i = 0; $i < count($Alist); $i+=2) {
        if ($Alist[$i] > $Amax) {
            $Amax = $Alist[$i];
        }
    }
    /*10*/
    $Blist_orig = [1,1,1];
    $Blist = $Blist_orig;
    for ($i = count($Blist)-1; $i > 0; $i--) {
        $Blist[$i] = $Blist[$i-1];
    }
    $Blist[0] = 0;
    /*11*/
    $Clist = [[1,2,3],[4,5,6],[7,8,9]];
    $max = [];
    $maxn = 0;
    for ($i = 0; $i < count($Clist[0]); $i++) {
        for ($j = 0; $j<count($Clist); $j++) {
            if ($Clist[$j][$i] > $maxn) {
                $maxn = $Clist[$j][$i];
            }
        }
        $max[$i] = $maxn;
        $maxn = 0;
    }
    /*11*/
    $Dlist_orig =   [[1,2,3],[4,5,6],[7,8,9]];
    $Dlist = $Dlist_orig;

    for ($i = count($Dlist)-1; $i > -1; $i--) {
        for ($j = count($Dlist[$i])-1; $j > (-1+((count($Dlist)-1)-$i)); $j--) {
            $Dlist[$i][$j] = 0;
        };
    }
    /*12*/
    /*function sevenlab_one($x, $y) {return ($x > 0 ? 2 : 1) + ($y > 0 ? 0 : 2);}*/
    function sevenlab_one($x, $y) {return (($x > 0 ? 2 : 1) + ($y > 0 ? 0 : 2)) > 2 ? (($x > 0 ? 2 : 1) + ($y > 0 ? 0 : 2)) : (3-(($x > 0 ? 2 : 1) + ($y > 0 ? 0 : 2)));}
    $sevenX = 2;
    $sevenY = -2;
    /*13*/
    $Snine = "No matches here";
    $S0nine = "test";
    $resnine = substr_count($Snine, $S0nine);
    /*14*/
    $fullPath = "C://z//y//x//myfile.txt";

    $directories = explode('//', $fullPath);

    if (count($directories) > 2) {
        $firstDirectory = $directories[1];
        $resten = $firstDirectory;
    } else {
        $resten = "/";
    }

    $tasktxt = [['Поменять местами содержимое переменных A и B и вывести новые значения A и B','С начала суток прошло N секунд (N — целое). Найти количество полных часов, прошедших с начала суток.'], ['Дано трехзначное число. Проверить истинность высказывания: «Все цифры данного числа различны','На числовой оси расположены три точки: A, B, C. Определить, какая из двух последних точек (B или C) расположена ближе к A, и вывести эту точку и ее расстояние от точки A','<img src="img/one.jpg"/>','<img src="img/two.jpg"/>'], ['Дано целое число N (> 1) и набор из N вещественных чисел. Проверить,  образует  ли  данный  набор  возрастающую  последовательность.  Если образует, то вывести TRUE, если нет — вывести FALSE','Дано целое число N (> 0). Используя один цикл, найти сумму 1! + 2! + 3! + . . . + N ! (выражение N! —  N–факториал —  обозначает произведение  всех целых чисел от 1 до N :    N! = 1·2·. . .·N )'], ['Дан массив A размера N. Найти максимальный  элемент из его элементов с нечетными номерами: A1, A3, A5, . . . .', 'Дан массив размера N. Осуществить сдвиг элементов массива вправо на одну позицию (при этом A1 перейдет в A2, A2 — в A3, . . ., AN −1 — в AN , a исходное  значение  последнего  элемента  будет  потеряно).  Первый  элемент полученного массива положить равным 0.'],[' Дана  матрица  размера  M  × N.  Найти  минимальный   среди  максимальных элементов ее столбцов.', 'Дана  квадратная  матрица  порядка   M. Обнулить  элементы  матрицы,  лежащие на  побочной  диагонали  и  ниже  нее.  Условный  оператор  не использовать.'],['Написать  функцию  f(x,y),  вычисляющую  и  возвращающую  номер четверти на координатной плоскости по координатам точки (x,y). Продемонстрировать  работу  функции  для  четырех  вариантов  параметров,  соответствующих всем четвертям.',  'Дан массив A размера N. Найти максимальный элемент из его элементов с нечетными номерами: A1, A3, A5, . . . .'],["Даны строки S и S0. Найти количество вхождений строки S0 в строку S.", "Дана строка, содержащая полное имя файла. Выделить из этой стро-ки  название  первого  каталога  (без  символов  «/»).  Если  файл  содержится  в корневом каталоге, то вывести символ «/»."]];
        
    $taskbe = [[$a.' '.$b,$N], [$xOne,$A. ' '. $B. ' '. $C,$xTwo,$xThree], [$num,$Nthree], [implode(" ", $Alist), implode(" ", $Blist_orig)], [matrix($Clist), matrix($Dlist_orig)], [$sevenX.' '.$sevenY, 'x'], [$Snine.' / '.$S0nine, $fullPath]];
        
    $taskaf = [[$b.' '.$a,round($N/3600)], [$resOne,$resTwo,round($resThree, 2),round($resFour, 2)], [$resSix,$sum], [$Amax, implode(" ", $Blist)], [min($max), matrix($Dlist)], [sevenlab_one($sevenX,$sevenY), 'x'], [$resnine, $resten]];
        
    $taskdev = [[1,2], [3,4,5,5], [1,2], [4,5], [1,3], [2,6],[3,2]];
    $tasknum = count($tasktxt)
?>