<?php
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

$categories = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
$tasks = [
  [
    "title" => "Собеседование в IT компании",
    "date" => "31.03.2023",
    "category" => $categories[2],
    "status" => false
  ],
  [
    "title" => "Выполнить тестовое задание",
    "date" => "25.12.2019",
    "category" => $categories[2],
    "status" => false
  ],
  [
    "title" => "Сделать задание первого раздела",
    "date" => "21.12.2019",
    "category" => $categories[1],
    "status" => true
  ],
  [
    "title" => "Встреча с другом",
    "date" => "22.12.2019",
    "category" => $categories[0],
    "status" => false
  ],
  [
    "title" => "Купить корм для кота",
    "date" => "null",
    "category" => $categories[3],
    "status" => false
  ],
  [
    "title" => "Заказать пиццу",
    "date" => "null",
    "category" => $categories[3],
    "status" => false
  ]
];
