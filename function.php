<?php

function connection() {
    return new PDO("pgsql:host=localhost;port=5432;dbname=estoque", "postgres", "postgres");
  }
function showError() {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  }

function getProdutos() {
    $conexao = connection();
    $sql = "SELECT * FROM produto";
    $sentenca = $conexao->query($sql);
    $dados = $sentenca->fetchAll(PDO::FETCH_ASSOC); //query to array set
    return $dados;
  }
function save($produto) {
    $conexao = connection();
    $sql = "INSERT INTO produto (descricao, qtde_estoque, valor_compra, preco_venda) VALUES (?,?,?,?)";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $produto['descricao']);
    $sentenca->bindParam(2, $produto['qtde_estoque']);
    $sentenca->bindParam(3, $produto['valor_compra']);
    $sentenca->bindParam(4, $produto['preco_venda']);
    $sentenca->execute();
}

function update($produto) {
    $conexao = connection();
    $sql = "UPDATE produto SET descricao=?, qtde_estoque=?, valor_compra=?, preco_venda=? WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $produto['descricao']);
    $sentenca->bindParam(2, $produto['qtde_estoque']);
    $sentenca->bindParam(3, $produto['valor_compra']);
    $sentenca->bindParam(4, $produto['preco_venda']);
    $sentenca->bindParam(5, $produto['id']);
    $sentenca->execute();
  }

  function getProdutoById($id) {
    $conexao = connection();
    $sql = "SELECT * FROM produto WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $dados = $sentenca->fetch(PDO::FETCH_ASSOC);
    return $dados;
  }

  function excluir($id) {
    $conexao = connection();
    $sql = "DELETE FROM produto WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
  }

?>