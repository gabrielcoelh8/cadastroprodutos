<?php 

if (!isset($produto)) { //se $produto estiver vazia (novo), será preenchida abaixo
    $produto = array(); //transforma em array
    $produto['id'] = 0;
    $produto['descricao'] = "";
    $produto['qtde_estoque'] = "";
    $produto['valor_compra'] = "";
    $produto['preco_venda'] = "";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 8nbTov4integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>

<?php
include_once "menu.php";
?>

<section class="bg-secondary bg-gradient">
<div class="container-fluid mt-5 p-5 text-light">

<form action="save.php" method="post"> 
<!--manda as info do formulario em variaveis post para o arquivo save.php--> 

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">id</label>

    <div class="col-sm-3">
      <input readonly type="number" class="form-control" name="id" 
      value="<?php echo $produto['id']; ?>"> 
      <!--exibe o valor da variavel por padrão-->
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">descricao</label>

    <div class="col-sm-3">
      <input type="text" class="form-control" name="descricao" 
      value="<?php echo $produto['descricao']; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">qtde_estoque</label>

    <div class="col-sm-3">
      <input type="number" class="form-control" name="qtde_estoque"
      value="<?php echo $produto['qtde_estoque']; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">valor_compra</label>

    <div class="col-sm-3">
      <input type="number" class="form-control" name="valor_compra" step="0.01"
      pattern="^\d*(\.\d{0,2})?$"
      value="<?php echo $produto['valor_compra']; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">preco_venda</label>
    
    <div class="col-sm-3">
      <input type="number" class="form-control" name="preco_venda" step="0.01"
      pattern="^\d*(\.\d{0,2})?$" 
      value="<?php echo $produto['preco_venda']; ?>">
    </div>
  </div>

  <button type="submit" class="btn btn-primary m-2">Submit</button>
</form>

</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>