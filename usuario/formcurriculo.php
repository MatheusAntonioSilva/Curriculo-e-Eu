<html>
    <head>
        <title>Currículo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../bootstrap/js/jquery-1.11.2.js" type="text/javascript"></script>
        <link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
        <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="../bootstrap/js/formatacao.js" type="text/javascript"></script>
        <script src="../bootstrap/js/janelamodal.js" type="text/javascript"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/npm.js" type="text/javascript"></script>
        <link href="../bootstrap/css/css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <footer>
            <div id="pagina" class="container-fluid">

                <div id="banner" class="col-md-12">
                    

                    <div class="window" id="janela1">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default fechar" data-dismiss="modal">Close</button>
                        </div>
                        <h4>Click em uma opção:</h4>
                        <div id="botao1">
                            <a href = "../cadastro/cadastrousu.html">
                                <img src="../imagens/usuario.jpg" height="200" width="300" alt="">
                            </a>
                        </div>

                        <div id="botao2">
                            <a href = "../cadastro/cadastroadm.html">
                                <img src="../imagens/adm.jpg" height="200" width="300" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="window" id="janela2">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default fechar" data-dismiss="modal">Close</button>
                        </div>
                        <h4>Click em uma opção:</h4>
                        <div id="botao1">
                            <a href = "../logins/loginUsu.html">
                                <img src="../imagens/usuario.jpg" height="250" width="325" alt="">
                            </a>
                        </div>

                        <div id="botao2">
                            <a href = "../logins/loginemp.html">
                                <img src="../imagens/adm.jpg" height="250" width="325" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- mascara para cobrir o site -->  
                <div id="mascara"></div>

                <div id="menu" class="col-md-12 menu2">
                    <nav role="navigation" class="navbar navbar-default"> 
                        <div class="navbar-header">
                            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle ">
                                <span class="sr-only">Navegação responsiva</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                             <a href="index.html" class="navbar-brand">Home</a>
                        </div>
                        <div id="navbarCollapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="formcurriculo.php">Gerador de currículos</a>
                                </li>
                                <li>
                                    <a href="empresas.php">Empresas</a>
                                </li>
                                <li>
                                    <a href="vagas.php">Vagas</a>
                                </li>
                                <li>
                                    <a href="direitos.php">Direitos do Trabalhador</a>
                                </li>
                                <li>
                                    <a href="noticias.php">Noticias</a>
                                </li>
                                <li>
                                    <a href="duvidas.php">Duvidas</a>
                                </li>
                                <li>
                                    <a href="sobre.php">Sobre</a>
                                </li>
                               <li>
                                   <a href="configuracoes.php">Configurações</a>
                                </li>
                            </ul>
                            
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="sair.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
                                
                            </ul>
                        </div>
                    </nav>
                    </div>
              

                <div id="conteudo" class="col-md-12">
           <h1>Formulário de Cadastro do Usuário</h1>
           <form id="Curriculo" name="curriculo" method="POST" action="incluirCurriculo.php" onsubmit="return validaCampo(); return false;"> <!-- Abrindo o formulário e enviando a ação para a página *** -->

			<div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="cur_nome" type="text" class="span4" id="prependInput" required placeholder="Nome e Sobrenome:"> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
			</div>
               <div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="cur_endereco" type="text" class="span4" id="prependInput" required placeholder="Endereço:"> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
			</div>
               <div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="cur_bairro" type="text" class="span4" id="prependInput" required placeholder="Bairro:"> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no camp:o. -->
			</div>
		<div class="controls controls-row">
				
				<div class="input-append">
				<input name="cur_cep" type="text" class="span3" placeholder="CEP" name="numbers" maxlength="9" pattern="[0-9]+$"> <!-- Máximo de caracteres permitido -->
			</div>
                      <div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="cur_cidade" type="text" class="span4" id="prependInput" required placeholder="Cidade:"> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no camp:o. -->
			</div>
                    
                      <div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="cur_UF" type="text" class="span4" id="prependInput" required placeholder="UF:"> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no camp:o. -->
			</div>
               
                    <div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="cur_estadocivil" type="text" class="span4" id="prependInput" required placeholder="Estado Civil:"> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no camp:o. -->
			</div>
			
                        <div class="controls input-prepend">
				<span class="add-on"><i class="icon-user"></i></span> <!-- Colocando ícone -->
				<input name="cur_nasc" type="date" class="span4" id="prependInput" required > <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
			</div>
                    
                     <div class="controls input-prepend">
                                <span class="add-on"><i class="icon-lock"></i></span>
                                 
                                  <input name="cur_nascionalidade" type="text" class="span4" id="prependInput" required placeholder="Nascionalidade:">
                                             </div>
                	<div class="controls controls-row">
				
				<div class="input-append">
				<input name="cur_fone" type="text" class="span3" placeholder="Telefone" name="numbers" maxlength="9" pattern="[0-9]+$"> <!-- Máximo de caracteres permitido -->
			</div>
                     
                       <div class="controls controls-row">
				
				<div class="input-append">
				<input name="cur_celular" type="text" class="span3" placeholder="Celular:" name="numbers" maxlength="9" pattern="[0-9]+$"> <!-- Máximo de caracteres permitido -->
			</div>
                           
                           <div class="controls input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input name="cur_email" type="email" class="span4" id="prependInput" required placeholder="Email:">
			</div>
                            
                          
                            <div class="controls input-prepend">
                                <span class="add-on"><i class="icon-lock"></i></span>
                                 
                                  <input name="cur_formacoes" type="text" class="span4" id="prependInput" required placeholder="Formações:">
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
           </div>

            </div>
        </footer>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>&copy; Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>