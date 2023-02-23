CREATE TABLE produto(
	id SERIAL NOT NULL PRIMARY KEY, 
	descricao VARCHAR(50) NOT NULL,
	qtde_estoque INT NOT NULL,
	valor_compra NUMERIC(20,2),
	preco_venda NUMERIC(20,2)
);

id / descricao / qtde_estoque / valor_compra / preco_venda

select * from produto

INSERT INTO produto (descricao, qtde_estoque, valor_compra, preco_venda) VALUES ('Sabão de barra',12,1.99,2.99)