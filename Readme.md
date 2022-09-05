# Raiz do Projeto:
CRUD-PHP
|
├── App/
|    ├── ControllerApp.php
|    └── Model/
|          |
|          ├── App.php
|          └── Conexao.php
|                  └── Arquivo que faz conexão com o Banco de Dados
|
├── Includes/
|    └── Header.php
|
├── cadastrar.php 
├── editar.php
└── index.php

# Código SQL da Tabela Cadastro , Ultilizei o MySql:
```sql
CREATE TABLE `cadastro`(
    `id`INT NOT NULL AUTO_INCREMENT,
    `nome`VARCHAR(50) NOT NULL,
    `filiacao`VARCHAR(50) NOT NULL,
    `cpf`VARCHAR(50) NOT NULL,
    `nascimento`VARCHAR(50) NOT NULL,
    `endereco`VARCHAR(50) NOT NULL,
    `bairro`VARCHAR(50) NOT NULL,
    `cep`VARCHAR(50) NOT NULL,
    `municipio`VARCHAR(50) NOT NULL,
    `email`VARCHAR(50) NOT NULL,
    `tel`VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
```