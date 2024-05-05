<?php
if ($_POST['action'] == 'callThisFunction') {
    // Вызываем функцию
    echo executeFunction();
}

function executeFunction() {
    // Здесь находится тело вашей функции
    return 'Функция успешно выполнена!';
}
?>
