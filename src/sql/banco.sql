CREATE TABLE item (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    localizacao VARCHAR(255) NOT NULL
);