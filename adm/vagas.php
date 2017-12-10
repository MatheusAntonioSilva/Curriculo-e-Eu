<?php
  session_start();
  ?>
<html>
    <head>
        <title>Currículo & Eu</title>
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
        <link href="../bootstrap/css/cssadm.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
            <div id="pagina">

                     <div id="banner1" >
                <div id="text">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="../imagens/teste.jpg" alt="Chania">
                                 <div class="carousel-caption">
                                <h2><font color="#000000">Bem vindo a sua pagina no C&E!!!</font></h2>
                                <p><font color="#000000">Aqui você encontrara os melhores profissionais!!!</font></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="../imagens/teste.jpg" alt="Chania">
                            <div class="carousel-caption">
                                  <h2><font color="#000000">Bem vindo a sua pagina no C&E!!!</font></h2>
                                <p><font color="#000000">Aqui você encontrara os melhores profissionais!!!</font></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="../imagens/teste.jpg" alt="Flower">
                            <div class="carousel-caption">
                                <h2><font color="#000000">Bem vindo a sua pagina no C&E!!!</font></h2>
                                <p><font color="#000000">Aqui você encontrara os melhores profissionais!!!</font></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="../imagens/teste.jpg" alt="Flower">
                            <div class="carousel-caption">
                               <h2><font color="#000000">Bem vindo a sua pagina no C&E!!!</font></h2>
                                <p><font color="#000000">Aqui você encontrara os melhores profissionais!!!</font></p>
                            </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only"><</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">></span>
                        </a>
                    </div>
                </div>        
            </div>

                <div id="menu" >
                    <nav role="navigation" class="navbar navbar-default"> 
                        <div class="navbar-header">
                            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle menu2">
                                <span class="sr-only">Navegação responsiva</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                
                            </button>
                            <a href="index.html" class="navbar-brand">Home</a>
                        </div>
                        <div id="navbarCollapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="listarcurriculos.php">Listar Currículos</a>
                                </li>
                                <li>
                                    <a href="usuarios.php">Usuários Disponíveis</a>
                                </li>
                                <li>
                                    <a href="vagas.php">Inserir Vagas</a>
                                </li>
                                <li>
                                    <a href="noticias.php">Notícias</a>
                                </li>
                                <li>
                                    <a href="duvidas.php">Dúvidas</a>
                                </li>
                                <li>
                                    <a href="configuracoes.php">Configurações</a>
                                </li>
                                <li>
                                    <a href="sobre.php">Sobre</a>
                                </li>
                               
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="sair.php"><span class="glyphicon glyphicon-log-in"></span>Sair</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>


          
                    


                <div id="conteudo" class="conteudo">
                    <h1>Formulário de Cadastro do administrador</h1>
<form id="Cadastro" name="cadastro" method="POST" action="../incluir/incluirVagas.php" onsubmit="return validaCampo(); return false;"> <!-- Abrindo o formulÃ¡rio e enviando a aÃ§Ã£o para a pÃ¡gina *** -->

                <div class="controls input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span> <!-- Colocando Ã­cone -->
                    <input name="vag_cat" type="text" class="span4" id="vag_cat" required placeholder="Categoria da vaga"> <!-- Campo do formulÃ¡rio, tipo texto, class tamanho do campo, ,campo obrigaÃ³rio, nome que fica visÃ­vel no campo. -->
		</div>
		<div class="controls input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span> <!-- Colocando Ã­cone -->
                    <input name="vag_descri" type="text" class="span4" id="vag_descri" required placeholder="Descrição da vaga"> <!-- Campo do formulÃ¡rio, tipo texto, class tamanho do campo, ,campo obrigaÃ³rio, nome que fica visÃ­vel no campo. -->
		</div>
                <div class="controls controls-row">
                    <div class="input-append">
                        <input name="vag_salario" type="text" class="span3" id="vag_salario" placeholder="Sálario" > <!-- MÃ¡ximo de caracteres permitido -->
                    </div>
		<button class="btn">Enviar</button>
                </div>
</form> 
                         <div id="tabela">
                   
                    
                       <?php
                             $codigo = $_SESSION["codigo_empresa"];
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "bancocurriculo.sql";
                  
              
// Create connection
                    $conexao = mysqli_connect("localhost", "root", "", "bancocurriculo.sql");
// Check connection
                    if (!$conexao) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

               $sql= " SELECT vag_cat, vag_descri, vag_salario FROM vagas WHERE vag_cod = '".$codigo."' limit 1";;
                    $result = mysqli_query($conexao, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                           //  $codigo=  $row["vag_cod"];
                            echo  
                                   "<table class='table table-hover'>" .
                                  "<tbody>" .
                                    
                                 "<form id='vagas' name='vagas' method='POST' action='../alterar/alterarvagas.php'>".
             
                "<table class='table table-hover'>" .
             
             "<tbody>".
                    
             "<tr>". "<td><b>Nome da Vaga</b></td><td><input name='vaga_cat' type='text' value='".$row["vag_cat"]."'></td></tr>".
             "<tr>". "<td><b>Descrição</b></td><td><input name='vag_descri' type='text' value='".$row["vag_descri"]."'></td></tr>".
             "<tr>". "<td><b>Salario</b></td><td><input name='vag_salario' type='text' value='".$row["vag_salario"]."'></td></tr>".
            "<tr>". "<td><a href='../excluir/excluirvagas.php?id=$codigo'>Excluir Vaga</a></td></tr>".
                "<td><button class='btn' >Enviar</button></td></form>";
                        }
                    } else {
                        echo "<h1>Nenhuma vaga disponivel neste momento<h1>";
                    }

                    mysqli_close($conexao);
                 

                    /*$servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "bancocurriculo.sql";
                    
                    
                    $codigo = $_SESSION["codigo_empresa"];
// Cria a conexão com o banco
$conexao = mysqli_connect("localhost", "root", "", "bancocurriculo.sql");
// Confere a conexão se der certos irá mostrar os registros no banco, se não der apareçera uma mensagem de erro
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
//WHERE usu_cod =".$codigo
//$q_user = mysqli_query ($sql = "SELECT * FROM cad_usuario WHERE usu_cod =.$codigo ");
  $sql= " SELECT * FROM vagas WHERE vag_cod =.$codigo";
  
  $result = mysqli_query($conexao, $sql);
if (mysqli_num_rows($result) > 0) {
    // os resultados do banco
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='container'>".
           
            "<form id='vagas' name='vagas' method='POST' action='../alterar/alterarvagas.php'>".
             "<input type='hidden' name='codigo' value='".$row["emp_cod"]."'/>".
                "<table class='table table-hover'>" .
             
             "<tbody>".
             "<tr>". "<td><b>Nome da Vaga</b></td><td><input name='vaga_cat' type='text' value='".$row["vag_cat"]."'></td></tr>".
             "<tr>". "<td><b>Descrição</b></td><td><input name='vag_descri' type='text' value='".$row["vag_descri"]."'></td></tr>".
             "<tr>". "<td><b>Salario</b></td><td><input name='emp_senha' type='password' value='".$row["vag_salario"]."'></td></tr>".
            "<tr>". "<td><a href='../excluir/excluirvagas.php?id=$codigo'>Excluir Vaga</a></td></tr>".
                "<td><button class='btn' >Enviar</button></td></form>";
    }     
        } else {
    echo "0 resultados";
}

mysqli_close($conexao);
   
                    
                    
                */   ?>
                             
                             
                    
                 </div>

            </div>
            </div>
        
    </body>
</html>