<?php
 session_start();
$codigo = $_SESSION["codigo_usuario"];
?>
<html>
    <head>
        <title>Currículo & Eu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../bootstrap/js/jquery-1.11.2.js" type="text/javascript"></script>
        <link href="../../bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
        <script src="../../bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="../../bootstrap/js/formatacao.js" type="text/javascript"></script>
        <script src="../../bootstrap/js/janelamodal.js" type="text/javascript"></script>
        <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../bootstrap/js/npm.js" type="text/javascript"></script>
        <link href="../../bootstrap/css/css.css" rel="stylesheet" type="text/css"/> 
        <link href="../../bootstrap/css/cssadm.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
            <div id="pagina">

                 <div id="banner1" >
                    <div id="text">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="../../imagens/teste.jpg" alt="Chania">
                                       <div class="carousel-caption">
                                <h2><font color="#000000">Bem vindo a sua pagina no C&E!!!</font></h2>
                                <p><font color="#000000">Faça seu curriculo e fique mais perto do emprego dos sonhos!</font></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="../../imagens/teste.jpg" alt="Chania">
                            <div class="carousel-caption">
                                 <h2><font color="#000000">Bem vindo a sua pagina no C&E!!!</font></h2>
                                <p><font color="#000000">Faça seu curriculo e fique mais perto do emprego dos sonhos!</font></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="../../imagens/teste.jpg" alt="Flower">
                            <div class="carousel-caption">
                                <h2><font color="#000000">Bem vindo a sua pagina no C&E!!!</font></h2>
                                <p><font color="#000000">Faça seu curriculo e fique mais perto do emprego dos sonhos!</font></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="../../imagens/teste.jpg" alt="Flower">
                            <div class="carousel-caption">
                               <h2><font color="#000000">Bem vindo a sua pagina no C&E!!!</font></h2>
                                <p><font color="#000000">Faça seu curriculo e fique mais perto do emprego dos sonhos!</font></p>
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
                             <a href="../index.html" class="navbar-brand">Home</a>
                        </div>
                        <div id="navbarCollapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="formcurriculo.php">Gerador de currículos</a>
                                </li>
                                <li>
                                    <a href="../empresas.php">Empresas</a>
                                </li>
                                <li>
                                    <a href="../vagas.php">Vagas</a>
                                </li>
                                <li>
                                    <a href="../direitos.php">Direitos do Trabalhador</a>
                                </li>
                                <li>
                                    <a href="../noticias.php">Noticias</a>
                                </li>
                                <li>
                                    <a href="../duvidas.php">Duvidas</a>
                                </li>
                                <li>
                                    <a href="../sobre.php">Sobre</a>
                                </li>
                               <li>
                                   <a href="../configuracoes.php">Configurações</a>
                                </li>
                            </ul>
                            
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="../sair.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
                                
                            </ul>
                        </div>
                    </nav>
                    </div>
              

                <div id="conteudo" class="conteudo">
                    <?php
   $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "bancocurriculo.sql";
 
                    // Cria a conexão com o banco
                    $conexao = mysqli_connect("localhost", "root", "", "bancocurriculo.sql");
                    // Confere a conexão se der certos irá mostrar os registros no banco, se não der apareçera uma mensagem de erro
                    if (!$conexao) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM curriculo WHERE cur_cod =".$codigo." limit 1";
                    $result = mysqli_query($conexao, $sql);
   
                    if (mysqli_num_rows($result) > 0) {
                        // os resultados do banco
                        while($row = mysqli_fetch_array($result)) {
                            $codigo=  $row["cur_cod"];
                            echo "
           <div id='formulario' style='
                            float: left;
    width: 30%;
'>  
           <h1>Monte seu curriculo</h1>
           <form id='curriculo' name='curriculo' method='POST' action='incluirCurriculo.php' onsubmit='return validaCampo();
                            return false;'> <!-- Abrindo o formulário e enviando a ação para a página *** -->
                        <div class='controls input-prepend'>
                            <span class='add-on'><i class='icon-user'></i></span> <!-- Colocando ícone -->
                            <input name='cur_nome' type='text' class='span4' id='prependInput' required='' placeholder='Nome e Sobrenome'> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
                        </div>
                        <div class='controls input-prepend'>
                            <span class='add-on'><i class='icon-home'></i></span> <!-- Colocando ícone -->
                            <input name='cur_endereco' type='text' class='span4' id='prependInput' required='' placeholder='Endereço'> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
                        </div>
                        <div class='controls input-prepend'>
                            <span class='add-on'><i class='icon-home'></i></span> <!-- Colocando ícone -->
                            <input name='cur_bairro' type='text' class='span4' id='prependInput' required='' placeholder='Bairro'> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no camp:o. -->
                        </div>
                        <div class='input-append'>
                            <span class='add-on'><i class='icon-home'></i></span>
                            <input name='cur_cep' type='text' class='span3' maxlength='10' required='' pattern='[0-9]+$+-+.' placeholder='CEP' onkeypress='MascaraCep(this)' onblur='ValidaCep(curriculo.cep)'> <!-- Máximo de caracteres permitido -->
                        </div>
                        <div class='controls input-prepend'>
                            <span class='add-on'><i class='icon-user'></i></span> <!-- Colocando ícone -->
                            <input name='cur_cidade' type='text' class='span4' id='prependInput' required='' placeholder='Cidade'> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no camp:o. -->
                        </div>
                        <div class='controls input-prepend'>
                            <span class='add-on'><i class='icon-user'></i></span> <!-- Colocando ícone -->
                            <input name='cur_UF' type='text' class='span4' id='prependInput' maxlength='2' required='' placeholder='UF'> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no camp:o. -->
                        </div>

                        <div class='form-group'>
                            <span class='add-on'><i class='icon-heart'></i></span>
                            <select class='form-control' required=''>
                                    <option>Selecione seu Estado Civil</option>
                                    <option>Solteiro(a)</option>
                                    <option>Casado(a)</option>
                                    <option>Viúvo(a)</option>
                                </select>
                        </div>
                        
                        <div class='controls input-prepend'>
                            <span class='add-on'><i class='icon-calendar'></i></span> 
                            <input name='cur_nasc' type='date' class='span4' id='prependInput' required=''> <!-- Campo do formulário, tipo texto, class tamanho do campo, ,campo obrigaório, nome que fica visível no campo. -->
                        </div>
                        <div class='controls input-prepend'>
                            <span class='add-on'><i class='icon-lock'></i></span>
                            <input name='cur_nascionalidade' type='text' class='span4' id='prependInput' required='' placeholder='Nacionalidade'>
                        </div>
                        <div class='input-append'>
                            <span class='add-on'><i class='icon-lock'></i></span>
                            <input name='cur_fone' type='text' class='span3' placeholder='Telefone' maxlength='14' pattern='[0-9]+$+()+.+-' required='' onkeypress='MascaraTelefone(this)' onblur='ValidaTel(curriculo.tel)'> <!-- Máximo de caracteres permitido -->
                        </div>
                        <div class='input-append'>
                            <span class='add-on'><i class='icon-lock'></i></span>
                            <input name='cur_celular' type='text' class='span3' placeholder='Celular' maxlength='15' pattern='[0-9]+$+()+.+-' required='' onkeypress='MascaraCelular(this)' onblur='ValidaCel(curriculo.cel)'> <!-- Máximo de caracteres permitido -->
                        </div>
                        <div class='controls input-prepend'>
                            <span class='add-on'><i class='icon-envelope'></i></span>
                            <input name='cur_email' type='email' class=4'span4' id='prependInput' required='' placeholder='Email:'>
                        </div>
                        <div class='controls input-prepend'>
                            <span class='add-on'><i class='icon-lock'></i></span>
                            <input name='cur_formacoes' type='text' class='span4' id='prependInput' required='' placeholder='Formações'>
                        </div>
                        <div class='input-append'>
                            <span class='add-on'><i class='icon-lock'></i></span>
                            <input name='cur_escolaridade' type='text' class='span4' id='prependInput' required='' placeholder='Escolaridade Atual'> <!-- Máximo de caracteres permitido -->
                        </div>
                        <div class='input-append'>
                            <span class='add-on'><i class='icon-lock'></i></span>
                            <input name='cur_perfil' type='text' class='span4' id='prependInput' required='' placeholder='Perfil'> <!-- Máximo de caracteres permitido -->
                        </div>
                        <div class='input-append'>
                            <span class='add-on'><i class='icon-lock'></i></span>
                            <input name='cur_objetivos' type='text' class='span4' id='prependInput' required='' placeholder='Objetivos'> <!-- Máximo de caracteres permitido -->
                        </div>
                        <br>
                        <button class='btn'>Enviar</button>
                        
                    </form>";
                      }
                    } else {
                        echo "0 resultados";
                    }

                    mysqli_close($conexao);
                    ?>
           

            </div>  
         
                    <div id="tabela" style="
    float: left;
    width: 40%;

">
                        <h2>Resposta das empresas</h2>
     <?php
	
       $codigo = $_SESSION["codigo_usuario"];
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "bancocurriculo.sql";
                   
                
                   $conexao = mysqli_connect("localhost", "root", "", "bancocurriculo.sql");
                    // Confere a conexão se der certos irá mostrar os registros no banco, se não der apareçera uma mensagem de erro
                    if (!$conexao) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                       // $sql = "SELECT cur_nome, cur_cod, cur_resposta FROM curriculo";
                    $sql = "SELECT cur_nome, cur_cod, cur_resposta FROM curriculo WHERE cur_cod =".$codigo." limit 1";
                    $result = mysqli_query($conexao, $sql);
   
                    if (mysqli_num_rows($result) > 0) {
                        // os resultados do banco
                        while($row = mysqli_fetch_array($result)) {
                             $codigo=  $row["cur_cod"];
                              echo 
                                 "<div class='container'>"."<table class='table table-hover'>" .
                                 "<tbody>" .
                                 "<tr>".  "<tr>". "<td>$codigo</td>". "<td>" . $row["cur_nome"] ."</td>"."<td>" . "<a href='pdf.php?id=$codigo'>Visualizar</a>" . "</td>" ."<td>" . $row["cur_resposta"] ."</td>"."</tr>"."</tbody>"."</div>";
                          }
                    } else {
                        echo "0 resultados";
                    }

                    mysqli_close($conexao);               
     ?>
                </div>
                </div>
            </div>
              
      
        
    </body>
</html>
