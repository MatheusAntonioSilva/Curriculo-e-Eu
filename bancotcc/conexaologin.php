<?php
/* my sql conect conecta o banco onde ele esta o */
$conexao = mysqli_connect("localhost","root","");
mysqli_select_db($conexao,"bancocurriculo");
$sql = "SELECT FROM cad_usuario";
$rs = mysqli_query($conexao,$sql);

  if(!empty($_GET["email"])&& !empty($_GET["senha"])){
      echo '<a href=../logins/usuario.php';
 
}
else{
 
};
 
?>
<head> 
    <title>Formulário de Login</title>
	<meta charset="UTF-8"> <!-- Formata o texto -->
        <meta name="description" content="Currículo & Eu"/>
	
        <!-- Anexa a folha de estilos nesta página -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.min.css" type="text/css">


	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>

           <h1>Formulário de Login</h1>
              <form action="conexão.php"> <!-- Abrindo o formulário e enviando a ação para a página *** -->

	<div class="controls input-prepend">
	<span class="add-on"><i class="icon-envelope"></i></span> <!-- Colocando ícone -->
	<input type="email" class="span4" id="prependInput" required placeholder="usu_email"> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
	</div>

        <div class="controls input-prepend">
        <span class="add-on"><i class="icon-lock"></i></span>
        <input type="password" class="span4" id="pwd" required placeholder="usu_senha">
        </div>     
         
        <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
        <label><input type="checkbox"> Lembrar</label>
        </div>
        </div>
        </div>
 
                       			
	<button class="btn">Enviar</button>
                               
        
              </form>
</body>
