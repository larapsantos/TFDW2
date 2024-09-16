CREATE TABLE Usuario(
    id serial,
    nome varchar(64) NOT NULL,
    senha varchar(64) NOT NULL,
    tipo int,
    primary key(id)
);

CREATE TABLE Trabalho(
    id serial,
    titulo varchar(128) NOT NULL,
    descricao varchar(1000) NOT NULL,
    categoria varchar(64) NOT NULL,
    primary key(id)
)