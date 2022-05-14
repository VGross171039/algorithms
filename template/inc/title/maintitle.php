<?php 

if ($_SERVER["REQUEST_URI"] == '/') :
  $title = 'Главная';
endif;

if (preg_match("/intro/i", $url)):
  $maint = 'Знакомство';
elseif (preg_match("/sortchoice/i", $url)):
  $maint = 'Сортировка выбором';
elseif (preg_match("/recursion/i", $url)):
  $maint = 'Рекурсия';
elseif (preg_match("/quicksort/i", $url)):
  $maint = 'Быстрая сортировка';
elseif (preg_match("/hashtables/i", $url)):
  $maint = 'Хеш таблицы';
elseif (preg_match("/search-width/i", $url)):
  $maint = 'Поиск в ширину';
elseif (preg_match("/deycstras/i", $url)):
  $maint = 'Алгоритм Дейкстры';
elseif (preg_match("/greedyalg/i", $url)):
  $maint = 'Жадные алгоритмы';
elseif (preg_match("/dynamics/i", $url)):
  $maint = 'Динамическое программирование';
elseif (preg_match("/k-algorithm/i", $url)):
  $maint = 'Алгоритм k';
elseif (preg_match("/addnext/i", $url)):
  $maint = 'Что дальше';
endif;

// ================= Section Intro ================= // 1
if ($url == '/view/intro/general/') :
  $title = 'Общие положения';
endif;

// ================= Section Sortchoice ================= // 2
if ($url == '/view/sortchoice/general/') :
  $title = 'Общие положения';
endif;

// ================= Section Recursion ================= // 3
if ($url == '/view/recursion/general/') :
  $title = 'Общие положения';
endif;

// ================= Section Quicksort ================= // 4
if ($url == '/view/quicksort/general/') :
  $title = 'Общие положения';
endif;

// ================= Section Hashtables ================= // 5
if ($url == '/view/hashtables/general/') :
  $title = 'Общие положения';
endif;

// ================= Section Search-width ================= // 6
if ($url == '/view/search-width/general/') :
  $title = 'Общие положения';
endif;

// ================= Section Deycstras ================= // 7
if ($url == '/view/deycstras/general/') :
  $title = 'Общие положения';
endif;

// ================= Section Greedyalg ================= // 8
if ($url == '/view/greedyalg/general/') :
  $title = 'Общие положения';
endif;

// ================= Section Dynamics ================= // 9
if ($url == '/view/dynamics/general/') :
  $title = 'Общие положения';
endif;

// ================= Section K-algorithm ================= // 10
if ($url == '/view/k-algorithm/general/') :
  $title = 'Общие положения';
endif;

// ================= Section Addnext ================= // 11
if ($url == '/view/addnext/general/') :
  $title = 'Общие положения';
endif;

?>
