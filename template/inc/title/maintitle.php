<?php 

if ($_SERVER["REQUEST_URI"] == '/') :
  $title = 'Главная';
endif;

if (preg_match("/intro/i", $url)):
  $title = 'Знакомство';
elseif (preg_match("/sortchoice/i", $url)):
  $title = 'Сортировка выбором';
elseif (preg_match("/recursion/i", $url)):
  $title = 'Рекурсия';
elseif (preg_match("/quicksort/i", $url)):
  $title = 'Быстрая сортировка';
elseif (preg_match("/hashtables/i", $url)):
  $title = 'Хеш таблицы';
elseif (preg_match("/search-width/i", $url)):
  $title = 'Поиск в ширину';
elseif (preg_match("/deycstras/i", $url)):
  $title = 'Алгоритм Дейкстры';
elseif (preg_match("/greedyalg/i", $url)):
  $title = 'Жадные алгоритмы';
elseif (preg_match("/dynamics/i", $url)):
  $titlet = 'Динамическое программирование';
elseif (preg_match("/k-algorithm/i", $url)):
  $title = 'Алгоритм k';
elseif (preg_match("/addnext/i", $url)):
  $title = 'Что дальше';
endif;

?>
