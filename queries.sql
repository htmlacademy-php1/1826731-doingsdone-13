/*Список проектов*/
INSERT INTO
    category(name, user_id)
VALUES
    ('Входящие', 1),
    ('Учеба', 2),
    ('Работа', 2),
    ('Домашние дела', 1),
    ('Авто', 1);

/*Пользователи*/
INSERT INTO
    users(name, email, pass)
VALUES
    ('Константин', 'KST1893@mail.ru', 'asd'),
    ('Виктор', 'VIC123@mail.ru', 'queque'),
    ('Григорий', 'KEK321@gmail.com', 'zxczxc');

/*Задачи*/
INSERT INTO
    task (name, date, cat_id, file, done)
VALUES
    ('Собеседование в IT компании', '2022-05-17', '3', null, '0'),
    ('Выполнить тестовое задание', '2022-05-17', '2', null, '0'),
    ('Сделать задание первого раздела', '2022-05-017', '2', null, '1'),
    ('Встреча с другом', '2022-05-17', '1', null, '0'),
    ('Купить корм для кота', '2021-05-09', '4', null, '0'),
    ('Заказать пиццу', '2022-05-17', '4', null, '0');



/*получить список из всех проектов для одного пользователя*/
SELECT * FROM category WHERE user_id = 1

/*получить список из всех задач для одного проекта*/
SELECT * FROM task WHERE cat_id = 4;

/*пометить задачу как выполненную*/
UPDATE task SET done = 1 WHERE id = 2;

/*обновить название задачи по её идентификатору*/
UPDATE task SET name = 'Купить корм для кота и собаки' WHERE id = 5;