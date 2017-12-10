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
                    <h2 align="center">Usuários disponiveis</h2>
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

                    $sql = "SELECT usu_nome, usu_email, usu_fone, usu_celular FROM cad_usuario  ";
                    $result = mysqli_query($conexao, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo  "<div class='container'>".
                                  "<table class='table table-hover'>" .
                                  "<tbody>" .
                                  "<tr>". "<td>" . "<b>Nome do usuário</b>" . "</td>" . "<td>" . $row["usu_nome"] ."</td>". "</tr>".
                                  "<tr>". "<td>" . "<b>E-mail de contato" . "</td>" . "<td>" . $row["usu_email"] ."</td>". "</tr>".
                                  "<tr>". "<td>" . "<b>Telefone de contato" . "</td>" . "<td>" . $row["usu_fone"] ."</td>". "</tr>".
                            "<tr>". "<td>" . "<b>Celular de contato" . "</td>" . "<td>" . $row["usu_celular"] ."</td>". "</tr>";
                        }
                    } else {
                        echo "<h1>Nenhum usuário encontrado neste momento<h1>";
                    }

mysqli_close($conexao);
?>
                </div>

            </div>
        
       
        
    </body>
</html>