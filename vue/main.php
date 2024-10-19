<?php
    include_once 'vue/mainLab.php';
    function myMain($n, $tlist, $blist, $alist, $devlist) {
        echo "<div class='main'>";
        for ($i = 0; $i < $n; $i++) {
            myMainLab('0'.$i+3, $tlist[$i], $blist[$i], $alist[$i], $devlist[$i]);
        }
        echo "</div>";
    }
?>
