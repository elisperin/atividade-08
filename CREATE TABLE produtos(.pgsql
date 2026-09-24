CREATE TABLE produtos(
    id SERIAL PRIMARY KEY,
    nome VARCHAR(60) NOT NULL,
    preco NUMERIC(10,2) NOT NULL
);