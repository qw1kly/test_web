o<?php
if ($_GET['action'] == 'MY FUCKING ID, NIGGA') {
    // Вызываем функцию
    echo executeFunction();
}

function executeFunction() {
    // Здесь находится тело вашей функции
    $fd = fopen("hello.txt", 'w') or die("не удалось создать файл");
    $str = "Привет мир";
    fwrite($fd, $str);
    fclose($fd);
}
?>
