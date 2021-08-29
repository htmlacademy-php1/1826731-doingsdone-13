<?php
include_once('functions/function.php');
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
        'date' => '25.12.2021',                          // Изменил дату для проверки функции diff_btw_date
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
//Основное содержимое страницы
$page_content = include_template('main.php', [
    'categories' => $categories, 
    'tasks' => $tasks, 
    'show_complete_tasks' => $show_complete_tasks
]); 
//Вся страница
$layout_content = include_template('layout.php', [
    'content' => $page_content,
     'title' => $title
    ]);
//Вывод страницы
print($layout_content);
