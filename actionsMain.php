# Скрипт для определения: является ли год високосным?
<?php
$current_year = is_numeric($_REQUEST['year']) ? (int)$_REQUEST['year'] : -1;
if ($current_year <= 0)
    echo 'Ошибка во входных данных';
elseif ($current_year % 400 == 0 or $current_year % 4 == 0 and $current_year % 100 != 0)
    echo 'Да';
else
    echo 'Нет';?>