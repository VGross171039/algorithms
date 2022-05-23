<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<h2>Упражнение 1</h2>
<p>Имеется отсортированный список из 128 имен, и вы ищете в нем значение методом бинарного поиска. Какое максимальное количество проверок для этого может потребоваться?</p><br>

<h3>Решение:</h3>

<?php $log = log(128, 2);?>

<p>Ответ: <?= $log;?></p>

<h2>Упражнение 2</h2>
<p>Если размер списка увеличился вдвое, как изменится максимальное количество проверок?</p><br>

<h3>Решение:</h3>

<?php 
$log = log((128*2), 2);
echo $log;
?>

<p>Ответ: + 1</p>


<?php require_once $root . '/template/shared/footer.php'; ?>