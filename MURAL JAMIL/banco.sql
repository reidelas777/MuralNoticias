CREATE DATABASE IF NOT EXISTS mural;
USE mural;
-- DROP DATABASE mural;

CREATE TABLE tb_mural(
id_mural			INT NOT NULL AUTO_INCREMENT,
de					VARCHAR(255) NOT NULL,
para				VARCHAR(255) NOT NULL,
msg				TEXT NOT NULL,
PRIMARY KEY(id_mural)
);

INSERT INTO tb_mural (de, para, msg) VALUES
("Alicia","João","OI tudo bem?");

SELECT * FROM tb_mural;

CREATE TABLE tb_login(
id_login			INT NOT NULL AUTO_INCREMENT,
usuario				VARCHAR(255) NOT NULL,
senha				VARCHAR(255) NOT NULL,
PRIMARY KEY(id_login)
);

INSERT INTO tb_login (usuario, senha) VALUES
("admin", "123");

SELECT * FROM tb_login;

