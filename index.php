<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-50">
        <?php if(file_exists($root . '/template/inc/menu/mainmenu.php')){
          require_once $root . '/template/inc/menu/mainmenu.php';
        }?>
      </div>
      <div class="col-50"></div>
    </div>
  </div>

<?php require_once $root . '/template/shared/footer.php'; ?>