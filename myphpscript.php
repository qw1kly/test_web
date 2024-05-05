<?php
if ($_GET['action'] == 'callThisFunction') {
    // Вызываем функцию
    echo executeFunction();
}

function executeFunction() {
    // Здесь находится тело вашей функции
    return 'Функция успешно выполнена!';
}
?>
