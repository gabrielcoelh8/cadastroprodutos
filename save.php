<?php
  include "function.php";
  showError();

  $produto = array();
  $produto['id'] = $_POST['id'];
  $produto['descricao'] = $_POST['descricao'];
  $produto['qtde_estoque'] = $_POST['qtde_estoque'];
  $produto['valor_compra'] = $_POST['valor_compra'];
  $produto['preco_venda'] = $_POST['preco_venda'];
  
  if ($produto['id'] == 0) {
    save($produto);
  } else {
    update($produto);
  }
  
  header("location: index.php");

 ?>