/*
Created		8/4/2015
Modified		8/18/2015
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/

/* as tabelas que existem */
drop table IF EXISTS `vagas`;
drop table IF EXISTS `descri_cliente`;
drop table IF EXISTS `descri_empresa`;
drop table IF EXISTS `cad_usuario`;
drop table IF EXISTS `cad_empresa`;
drop table IF EXISTS `curriculo`;

/* cria a tabela cad_empresa*/
Create table `cad_empresa` (
	`emp_cod` Int NOT NULL AUTO_INCREMENT,
	`emp_cnpj` Varchar(16) NOT NULL,
	`emp_nome` Varchar(20) NOT NULL,
	`emp_email` Varchar(60) NOT NULL,
	`emp_senha` Varchar(20) NOT NULL,
        `emp_fone` Varchar(16) NOT NULL,
	`emp_fonecontato` Varchar(16) NOT NULL,
 Primary Key (`emp_cod`)
) ENGINE = MyISAM;
/* cria a tabela cad_usuario*/
Create table `cad_usuario` (
	`usu_cod` Int NOT NULL AUTO_INCREMENT,
	`usu_nome` Varchar(40) NOT NULL,
	`usu_email` Varchar(50) NOT NULL,
	`usu_senha` Varchar(20) NOT NULL,
	`usu_CPF` Varchar(16) NOT NULL,
	`usu_nascimento` Date NOT NULL,
	`usu_fone` Varchar(16) NOT NULL,
	`usu_celular` Varchar(16) NOT NULL,
 Primary Key (`usu_cod`)
) ENGINE = MyISAM;
/* cria a tabela descri_empresa */
Create table `descri_empresa` (
	`descemp_cod` Int NOT NULL AUTO_INCREMENT,
	`emp_endereco` Varchar(40) NOT NULL,
	`emp_fone` Varchar(16),
	`emp_email` Varchar(40),
	`emp_ramo` Varchar(20) NOT NULL,
 Primary Key (`descemp_cod`)
) ENGINE = MyISAM;
/* cria a tabela descri_cliente */
Create table `descri_cliente` (
	`descusu_cod` Int NOT NULL AUTO_INCREMENT,
	`usu_fone` Varchar(16) NOT NULL,
	`usu_endereco` Varchar(40) NOT NULL,
	`usu_email` Varchar(20),
	`usu_desc` Varchar(100) NOT NULL,
 Primary Key (`descusu_cod`)
) ENGINE = MyISAM;
/* cria a tabela vagas*/
Create table `vagas` (
	`vag_cod` Int NOT NULL AUTO_INCREMENT,
	`vag_cat` Varchar(20),
	`vag_descri` Varchar(20) NOT NULL,
	`vag_salario` Varchar(15) NOT NULL,
 Primary Key (`vag_cod`)
) ENGINE = MyISAM;


/* cria a tabela curriculo*/
Create table `curriculo` (
        `cur_cod` Int NOT NULL AUTO_INCREMENT,
        `cur_nome` Varchar (40),
        `cur_fone` Varchar (16),
        `cur_celular` Varchar (16),
        `cur_nasc` Varchar (16),
        `cur_cidade` Varchar (16),
        `cur_endereco` Varchar (50),
        `cur_bairro` Varchar (16),
        `cur_cep` Varchar (16),
        `cur_estadocivil` Varchar (16),
        `cur_nascionalidade` Varchar (99),
        `cur_formacoes` Varchar (100),
        `cur_email` Varchar (60),
        `cur_escolaridade` Varchar (50),
        `cur_perfil` Varchar (60),
        `cur_objetivos` Varchar (50),
        `cur_UF` Varchar (2),
        `cur_resposta` Varchar (16),
Primary key (`cur_cod`)
) ENGINE = MyISAM;

Create table `curriculo2` (
        `cur_cod` Int NOT NULL AUTO_INCREMENT,
        `cur_nome` Varchar (40),
        `cur_fone` Varchar (16),
        `cur_celular` Varchar (16),
        `cur_nasc` Varchar (16),
        `cur_cidade` Varchar (16),
        `cur_endereco` Varchar (50),
        `cur_bairro` Varchar (16),
        `cur_cep` Varchar (16),
        `cur_estadocivil` Varchar (16),
        `cur_nascionalidade` Varchar (99),
        `cur_formacoes` Varchar (100),
        `cur_email` Varchar (60),
        `cur_escolaridade` Varchar (50),
        `cur_perfil` Varchar (60),
        `cur_objetivos` Varchar (50),
        `cur_UF` Varchar (2),
        `cur_resposta` Varchar (16),
Primary key (`cur_cod`)
) ENGINE = MyISAM;



    