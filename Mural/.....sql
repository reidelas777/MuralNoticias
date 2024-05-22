CREATE DATABASE if NOT EXISTS mural;
USE mural;
-- DROP DATABASE mural;

CREATE TABLE tb_mural(
id_mural     INT NOT NULL AUTO_INCREMENT,
de           VARCHAR(255) NOT NULL,
para         VARCHAR(255) NOT NULL,
msg          TEXT NOT NULL,
PRIMARY KEY(id_mural)
);

INSERT INTO tb_mural (de, para, msg) VALUES
("Sebastião", "Sebastiana", "Vamos sair?");

SELECT * FROM tb_mural;