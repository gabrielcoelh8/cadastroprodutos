<?php
  include_once "function.php";
  showError();
  
  $id = $_GET['id'];
  $produto = getProdutoById($id);

  include_once "form.php";
?>