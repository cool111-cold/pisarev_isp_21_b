<?php
    include_once 'vue/task.php';
    function myMainlab($n, $txtlist, $beforelist, $afterlist, $dev) {
        echo "<div class='main_lab'>";
        echo "<div class='main_lab-name'>$n</div>";
        for ($i = 0; $i < count($txtlist); $i++) {
            if ($dev[$i] == 1) {
                myTaskOne('0'.$i+1, $txtlist[$i], $beforelist[$i], $afterlist[$i]);
            }else if ($dev[$i] == 2) {
                myTaskTwo('0'.$i+1, $txtlist[$i], $beforelist[$i], $afterlist[$i]);
            }else if ($dev[$i] == 3) {
                myTaskThree('0'.$i+1, $txtlist[$i], $beforelist[$i], $afterlist[$i]);
            }else if ($dev[$i] == 4) {
                myTaskFour('0'.$i+1, $txtlist[$i], $beforelist[$i], $afterlist[$i]);
            }else if ($dev[$i] == 5) {
                myTaskFive('0'.$i+1, $txtlist[$i], $beforelist[$i], $afterlist[$i]);
            }else if ($dev[$i] == 6) {
                myTaskSix('0'.$i+1, $txtlist[$i], $afterlist[$i]);
            }
        }
        echo "</div>";
    }
    
?>