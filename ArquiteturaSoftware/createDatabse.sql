CREATE DATABASE IF NOT EXISTS Alura;

USE Alura;
CREATE TABLE alunos(
                       cpf varchar(14) NOT NULL PRIMARY KEY,
                       nome varchar(50) NOT NULL,
                       email varchar(60) NOT NULL
);
CREATE TABLE telefones (
                           ddd varchar(2) NOT NULL,
                           numero varchar(9) NOT NULL,
                           cpf_aluno varchar(14)NOT NULL,
                           PRIMARY KEY (ddd, numero),
                           FOREIGN KEY(cpf_aluno) REFERENCES alunos(cpf)
);
CREATE TABLE indicacoes (
                            id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            cpf_indicante varchar(14) not null,
                            cpf_indicado varchar(14) not null,
                            data_indicacao varchar(10) not null,
                            FOREIGN KEY(cpf_indicado) REFERENCES alunos(cpf),
                            FOREIGN KEY(cpf_indicante) REFERENCES alunos(cpf)
);


