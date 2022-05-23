<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>
<?php require_once 'classes/BinarySearch.php';?>

<?php 
$binary1 = new BinarySearch();
echo $binary1->binarySearch(3, [1, 3, 5, 7, 9]);

?>

<?php require_once $root . '/template/shared/footer.php'; ?>