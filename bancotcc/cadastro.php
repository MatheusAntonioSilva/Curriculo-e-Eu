
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
 
<body>
<?php 
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
 
$host= 'localhost';
$bd= 'bancocurricolo';
$senhabd= '';
 
$userbd = $bd; 
 
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome =  $_GET ["usu_nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$email	= $_GET ["usu_email"];	//atribuição do campo "email" vindo do formulário para variavel	//atribuição do campo "ddd" vindo do formulário para variavel
$fone	= $_GET ["usu_fone"];	//atribuição do campo "telefone" vindo do formulário para variavel
$endereco = $_GET ["usu_nascimento"];	//atribuição do campo "endereco" vindo do formulário para variavel	//atribuição do campo "bairro" vindo do formulário para variavel	//atribuição do campo "pais" vindo do formulário para variavel;	//atribuição do campo "login" vindo do formulário para variavel
$senha	= $_GET ["usu_senha"];	//atribuição do campo "senha" vindo do formulário para variavel	//atribuição do campo "news" vindo do formulário para variavel
$celular = $_GET ["usu_celular"];//atribuição do campo "sexo" vindo do formulário para variavel
//Gravando no banco de dados !
 
//conectando com o localhost - mysql
$conexao = mysql_connect($host,$bd, $senhabd);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 
 
 
$query = "INSERT INTO `clientes` ( `nome` , `email` , `sexo` , `ddd` , `telefone` , `endereço` , `cidade` , `estado` , `bairro` , `país` , `login` , `senha` , `news` , `id` ) 
VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha', '$news', '')";
 
mysql_query($query,$conexao);
 
echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>
