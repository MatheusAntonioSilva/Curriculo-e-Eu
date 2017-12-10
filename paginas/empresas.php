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
        <link href="../bootstrap/css/inicial.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div id="pagina">

                 <div id="banner1">
                <div id="text">
                    <div id="myCarousel" class="carousel slide carouselcss" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="../imagens/teste.jpg" alt="Chania">
                                <div class="carousel-caption">
                                    <h2><font color="#000000">Cadastra - se</font></h2>
                                    <p><font color="#000000">E fique mais proximo do seu emprego!!!</font></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../imagens/teste.jpg" alt="Chania">
                                <div class="carousel-caption">
                                      <h2><font color="#000000">Cadastra - se</font></h2>
                                    <p><font color="#000000">E fique mais proximo do seu emprego!!!</font></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../imagens/teste.jpg" alt="Flower">
                                <div class="carousel-caption">
                                    <h2><font color="#000000">Cadastra - se</font></h2>
                                    <p><font color="#000000">E fique mais proximo do seu emprego!!!</font></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../imagens/teste.jpg" alt="Flower">
                                <div class="carousel-caption">
                                    <h2><font color="#000000">Cadastra - se</font></h2>
                                    <p><font color="#000000">E fique mais proximo do seu emprego!!!</font></p>
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

            <div class="window" id="janela1">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default fechar" data-dismiss="modal">Close</button>
                </div>
                <h4>Click em uma opção:</h4>
                <div id="botao1">
                    <a href = "../cadastro/cadastrousu.html">
                        <img src="../imagens/usuario.jpg" height="250" width="350" alt="">
                    </a>
                </div>

                <div id="botao2">
                    <a href = "../cadastro/cadastroadm.html">
                        <img src="../imagens/adm.jpg" height="250" width="350" alt="">
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
                        <img src="../imagens/usuario.jpg" height="250" width="350" alt="">
                    </a>
                </div>

                <div id="botao2">
                    <a href = "../logins/loginemp.html">
                        <img src="../imagens/adm.jpg" height="250" width="350" alt="">
                    </a>
                </div>
            </div>


            <!-- mascara para cobrir o site -->  
            <div id="mascara"></div>

            <div id="menu" >
                <nav role="navigation" class="navbar navbar-default menu2"> 
                    <div class="navbar-header">
                        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle ">
                            <span class="sr-only">Navegação responsiva</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>
                         <a href="../index.html" class="navbar-brand">Home</a>
                    </div>
                    <div id="navbarCollapse" class="collapse navbar-collapse nav-justified">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="gerador.html">Gerador de currículos</a>
                            </li>
                            <li>
                                <a href="empresas.php">Empresas</a>
                            </li>
                            <li>
                                <a href="vagas.php">Vagas</a>
                            </li>
                            <li>
                                <a href="direitos.html">Direitos do Trabalhador</a>
                            </li>
                            <li>
                                <a href="noticias.html">Noticias</a>
                            </li>
                            <li>
                                <a href="duvidas.html">Duvidas</a>
                            </li>
                            <li>
                                <a href="sobre.html">Sobre</a>
                            </li>
                           
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#janela1" rel="modal"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
                            <li><a href="#janela2" rel="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        

        <div id="conteudo" class="conteudo">

                    <h2>Empresas disponiveis</h2>
<?php
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

                    $sql = "SELECT emp_nome, emp_email, emp_fone, emp_fonecontato FROM cad_empresa  ";
                    $result = mysqli_query($conexao, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo  "<div class='container'>".
                                  "<table class='table table-hover'>" .
                                  "<tbody>" .
                                  "<tr>". "<td>" . "<b>Nome da empresa</b>" . "</td>" . "<td>" . $row["emp_nome"] ."</td>". "</tr>".
                                  "<tr>". "<td>" . "<b>E-mail de contato" . "</td>" . "<td>" . $row["emp_email"] ."</td>". "</tr>".
                                  "<tr>". "<td>" . "<b>Telefone de contato" . "</td>" . "<td>" . $row["emp_fonecontato"] ."</td>". "</tr>" . "<br>";
                                 
                        }
                    } else {
                        echo "<h1>Nenhuma empresa encontrada neste momento<h1>";
                    }

                    mysqli_close($conexao);
                    ?>
               </div>

            </div>
        
        
    </body>
</html>