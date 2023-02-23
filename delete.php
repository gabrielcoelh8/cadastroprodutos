<?php

  include_once "function.php";
  showError();

  $id = $_GET['id'];
  excluir($id);
  header('location: produtos.php');

 ?>