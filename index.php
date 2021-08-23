<?php
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
$categories = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
$title = 'Дела в порядке';
$tasks = [
    [
        'title' => 'Собеседование в IT компании',
        'date' => '01.12.2019',
        'category' => 'Работа',
        'status' => false
    ], 
    [
        'title' => 'Выполнить тестовое задание',
        'date' => '25.12.2021',                       
        'category' => 'Работа',
        'status' => false
    ],
    [   'title' => 'Сделать задание первого раздела',
        'date' => '21.12.2019',
        'category' => 'Учеба',
        'status' => true
    ],
    [   'title' => 'Встреча с другом',
        'date' => '22.12.2019',
        'category' => '	Входящие',
        'status' => false
    ],
    [   'title' => 'Купить корм для кота',
        'date' => 'null',
        'category' => 'Домашние дела',
        'status' => false
    ],
    [   'title' => 'Заказать пиццу',
        'date' => 'null',
        'category' => 'Домашние дела',
        'status' => false
    ],
];
function task_count($task_array, $category )     //Функция подсчета задач
{
    $count = 0;
    foreach ($task_array as $task) {
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
//Основное содержимое страницы
$page_content = include_template('main.php', ['categories' => $categories, 'tasks' => $tasks, 'show_complete_tasks' => $show_complete_tasks]); 
//Вся страница
$layout_content = include_template('layout.php', ['content' => $page_content, 'title' => $title]);
//Вывод страницы
print($layout_content);
?>
