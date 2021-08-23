<?php

function task_count($tasks, $category )     //Функция подсчета задач
{
    $count = 0;
    foreach ($tasks as $task) {
        if ($task['category'] === $category) {
            $count++;
        }
    }
    return $count;
};
function include_template($name, array $data = []) {    //Функция подключения шаблона
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
};
function diff_btw_dates($array_date) {           //Функция подсчета разницы между датами

    $current_date = strtotime("now");           //Задаём текущую дату
    $task_date = strtotime($array_date);        //Берём дату из массива 
    $calc_date = $current_date - $task_date;    //Вычитаем разницу между датами
        if ($array_date == 'null') {            //Не учитываем задачи с датой 'null'
            return false;
        }
    $result = floor($calc_date/3600);           //Приводим дату к целому числу и переводим в часы

   return $result;
};
