<html lang="pt-BR">
<head> 
    <title>Cadastro do usuário</title>
	<meta charset="UTF-8"> <!-- Formata o texto -->
        <meta name="description" content="Currículo & Eu"/>
	
        <!-- Anexa a folha de estilos nesta página -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>
           <h1>Formulário de Cadastro do Usuário</h1>
           <form id="Cadastro" name="cadastro" method="POST" action="incluirUsuario.php" onsubmit="return validaCampo(); return false;"> <!-- Abrindo o formulário e enviando a ação para a página *** -->

			<div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="usu_nome" type="text" class="span4" id="prependInput" required placeholder="Nome e Sobrenome"> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
			</div>

			
			<div class="controls input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input name="usu_email" type="email" class="span4" id="prependInput" required placeholder="Email">
			</div>
                            
                            <div class="controls input-prepend">
                                <span class="add-on"><i class="icon-lock"></i></span>
                                 
                                  <input name="usu_senha" type="password" class="span4" id="pwd" required placeholder="Senha">
                                             </div>
                        <div class="controls input-prepend">
                                <span class="add-on"><i class="icon-check"></i></span>
                                 
                                  <input name="usuconfir_senha" type="password" class="span4" id="pwd" required placeholder="Confirme sua Senha">
                                             </div>
                        <div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="usu_nascimento" type="date" class="span4" id="prependInput" required > <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
			</div>
                	<div class="controls controls-row">
				
				<div class="input-append">
				<input name="usu_fone" type="text" class="span3" placeholder="Telefone" name="numbers" maxlength="9" pattern="[0-9]+$"> <!-- Máximo de caracteres permitido -->
			</div>
                     
                       <div class="controls controls-row">
				
				<div class="input-append">
				<input name="usu_celular" type="text" class="span3" placeholder="Celular" name="numbers" maxlength="9" pattern="[0-9]+$"> <!-- Máximo de caracteres permitido -->
			</div>
                       <br>
                       
                        
			</div>
			
				<button class="btn">Enviar</button>
                               
		</form>
           <a href="../index.html"><h3>Voltar</h3></a>
</body>

</html>
