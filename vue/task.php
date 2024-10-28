<?php
    function myTaskOne($num, $txt, $before, $after) {
        echo "<div class='task one'>";
        echo "  <div class='task_num'>$num</div>";
        echo "  <div class='task_info'>";
        echo "     <div class='task_info-txt'>$txt</div>";
        echo "     <div class='task_info-res'>";
        echo "        <div class='res_before'>$before</div>";
        echo "        <img src='free-icon-atom-9178189.png' class='load'>";
        echo "        <div class='res_after'>$after</div>";

        echo "     </div>";
        echo "  </div>";
        echo "</div>";
    }

    function myTaskTwo($num, $txt, $before, $after) {
        echo "<div class='task two'>";
        echo "  <div class='task_num'>$num</div>";
        echo "  <div class='task_info'>";
        echo "     <div class='task_info-txt'>$txt</div>";
        echo "     <div class='task_info-res'>";
        echo "        <div class='res_before'>$before</div>";
        echo "        <img src='free-icon-atom-9178189.png' class='load'>";
        echo "        <div class='res_after'>$after</div>";

        echo "     </div>";
        echo "  </div>";
        echo "</div>";
    }
    
    function myTaskThree($num, $txt, $before, $after) {
        echo "<div class='task three'>";
        echo "  <div class='task_num'>$num</div>";
        echo "  <div class='task_info'>";
        echo "     <div class='task_info-txt'>$txt</div>";
        echo "     <div class='task_info-res'>";
        echo "        <div class='res_before'>$before</div>";
        echo "        <img src='free-icon-atom-9178189.png' class='load'>";
        echo "        <div class='res_after'>$after</div>";

        echo "     </div>";
        echo "  </div>";
        echo "</div>";
    }
    
    function myTaskFour($num, $txt, $before, $after) {
        echo "<div class='task four'>";
        echo "  <div class='task_num'>$num</div>";
        echo "  <div class='task_info'>";
        echo "     <div class='task_info-txt'>$txt</div>";
        echo "     <div class='task_info-res'>";
        echo "        <div class='res_before'>$before</div>";
        echo "        <img src='free-icon-atom-9178189.png' class='load'>";
        echo "        <div class='res_after'>$after</div>";

        echo "     </div>";
        echo "  </div>";
        echo "</div>";
    }

    function myTaskFive($num, $txt, $before, $after) {
        echo "<div class='task five'>";
        echo "  <div class='task_num'>$num</div>";
        echo "  <div class='task_info'>";
        echo "     <div class='task_info-txt'>$txt</div>";
        echo "     <div class='task_info-res'>";
        echo "        <div class='res_before'>$before</div>";
        echo "        <img src='free-icon-atom-9178189.png' class='load'>";
        echo "        <div class='res_after'>$after</div>";

        echo "     </div>";
        echo "  </div>";
        echo "</div>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["res_before"])) {
            $res_before_value = htmlspecialchars($_POST["res_before"]);
            $num = intval($_POST["num"]); // Получите номер задачи
            $new_res = explode(",", strval($res_before_value));
            $new_res_max = 0;
            for ($i = 0; $i < count($new_res); $i+=2) {
                if ($new_res[$i] > $new_res_max) {
                    $new_res_max = $new_res[$i];
                }
            }
            echo $new_res_max;
            exit;
        }
    }

    function myTaskSix($num, $txt, $after) {
        echo "<div class='task five'>";
        echo "  <div class='task_num'>$num</div>";
        echo "  <div class='task_info'>";
        echo "     <div class='task_info-txt'>$txt</div>";
        echo "     <div class='task_info-res'>";
        echo "        <input type='text' class='res_before' placeholder='Введите данные' data-num='$num'>";
        echo "        <button class='submit-btn' data-num='$num'></button>";
        echo "        <div class='res_after' id='result_$num'></div>";
        echo "     </div>";
        echo "  </div>";
        echo "</div>";
    }

    



?>


<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<script>
$(document).ready(function() {
    $('.submit-btn').click(function() {
        var num = $(this).data('num');
        var value = $('input[data-num="' + num + '"]').val();

        $.post('vue/task.php', { res_before: value, num: num }, function(response) {
            $('#result_' + num).html(response);
        });
    });
});
</script>