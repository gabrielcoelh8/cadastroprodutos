<?php
  include_once "function.php";
  showError();

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 8nbTov4integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Produtos</title>
</head>
<body>

<?php
include_once "menu.php";
?>

<section class="bg-secondary bg-gradient">
<div class="container-fluid mt-5 p-5 text-light">
<table class="table table-dark table-striped">
<thead>
         <tr>
           <th>ID</th>
           <th>descricao</th>
           <th>qtde_estoque</th>
           <th>valor_compra</th>
           <th>preco_venda</th>
           <th>Editar</th>
           <th>Excluir</th>
         </tr>
       </thead>

       <tbody>
         <?php
           $produtos = getProdutos();
           foreach ($produtos as $produto) {
              echo "
              <tr>
                <td>{$produto['id']}</td>
                <td>{$produto['descricao']}</td>
                <td>{$produto['qtde_estoque']}</td>
                <td>{$produto['valor_compra']}</td>
                <td>{$produto['preco_venda']}</td>
                <td><a href='update.php?id={$produto['id']}'>
                <button type='button' class='btn btn-warning'>update</button>
                </a></td>
                <td><a href='delete.php?id={$produto['id']}'>
                <button type='button' class='btn btn-danger'>delete</button>
                </a></td>
              </tr>
              ";
           }
          ?>
       </tbody>
</table>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>