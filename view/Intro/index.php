<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>
<?php require_once 'classes/BinarySearch.php';?>

<h2>Поиск позиции заданного числа</h2>
<p>Осуществляется поиск числа, и если оно присутствует в массиве - выводим его позицию</p>

<?php $array = [1, 3, 5, 7, 9];?>

<div class="result-banner">
  <p><?= binarySearch(3, $array);?></p>
  <p><?= binarySearch(-1, $array);?></p>
</div>


<?php require_once $root . '/template/shared/footer.php'; ?>