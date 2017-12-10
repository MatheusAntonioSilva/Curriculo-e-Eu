<html lang="pt-BR">
<head> 
    <title>Formulario de Curriculo</title>
	<meta charset="UTF-8"> <!-- Formata o texto -->
        <meta name="description" content="Currículo & Eu"/>
	
        <!-- Anexa a folha de estilos nesta página -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>
           <h1>Formulário de Cadastro do Usuário</h1>
           <form id="Curriculo" name="curriculo" method="POST" action="incluirCurriculo.php" onsubmit="return validaCampo(); return false;"> <!-- Abrindo o formulário e enviando a ação para a página *** -->

			<div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="cur_nome" type="text" class="span4" id="prependInput" required placeholder="Nome e Sobrenome:"> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
			</div>

			
			<div class="controls input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input name="cur_email" type="email" class="span4" id="prependInput" required placeholder="Email:">
			</div>
                            
                            <div class="controls input-prepend">
                                <span class="add-on"><i class="icon-lock"></i></span>
                                 
                                  <input name="cur_descri" type="text" class="span4" id="prependInput" required placeholder="Descrição:">
                                             </div>

                        <div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="cur_nasc" type="date" class="span4" id="prependInput" required > <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
			</div>
                	<div class="controls controls-row">
				
				<div class="input-append">
				<input name="cur_fone" type="text" class="span3" placeholder="Telefone" name="numbers" maxlength="9" pattern="[0-9]+$"> <!-- Máximo de caracteres permitido -->
			</div>
                     
                       <div class="controls controls-row">
				
				<div class="input-append">
				<input name="cur_formacoes" type="text" class="span4" id="prependInput" required placeholder="formações:"> <!-- Máximo de caracteres permitido -->
			</div>
                              <div class="controls controls-row">
                           <div class="input-append">
				<input name="cur_escolaridade" type="text" class="span4" id="prependInput" required placeholder="Escolaridade Atual:"> <!-- Máximo de caracteres permitido -->
			</div>
                                     <div class="controls controls-row">
                           <div class="input-append">
				<input name="cur_perfil" type="text" class="span4" id="prependInput" required placeholder="Perfil:"> <!-- Máximo de caracteres permitido -->
			</div>
                                  <div class="controls controls-row">
                           <div class="input-append">
				<input name="cur_objetivos" type="text" class="span4" id="prependInput" required placeholder="Objetivos:"> <!-- Máximo de caracteres permitido -->
			</div>
                       <br>
                       
                        
			</div>
			
				<button class="btn">Enviar</button>
                               
		</form>
           <a href="../index.html"><h3>Voltar</h3></a>
</body>

</html>
