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
    include_once 'vue/header.php';
    include_once 'vue/footer.php';
    include_once 'vue/main.php';
    include 'data/config.php';
    myHeader();
    myMain($tasknum, $tasktxt, $taskbe, $taskaf, $taskdev);
    myFooter()
?>
</body>
</html>