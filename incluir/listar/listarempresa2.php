<html>
    <head>
        <title>Currículo & Eu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap/css/css.css" rel="stylesheet" type="text/css"/>

        <script src="../bootstrap/js/jquery-1.11.2.js" type="text/javascript"></script>
        <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    </head>
    <body>
        <div id="pagina">

            <div id="logo"> </div>
            <div id="info">

                <div class="cabeca">
                    <form class="navbar-search pull-left">
                        <input type="text" class="search-query" placeholder="Busca">
                        <p> <button type="button" class="btn btn-info">
                                <span class="glyphicon-halfings glyphicon-search"></span> Search
                            </button></p>
                    </form> 



                </div>
            </div>

            <div id="corpo">
                <div id="menu">
                    <div class="col-md-3">
                        <div>
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="../index.html">Home</a>
                                </li>
                                <li>
                                    <a href="../paginas/gerador.html">Gerador de currículos</a>
                                </li>
                                <li>
                                    <a href="../paginas/empresas.html">Empresas</a>
                                </li>
                                <li>
                                    <a href="../paginas/vagas.html">Vagas</a>
                                </li>
                                <li>
                                    <a href="../paginas/direitos.html">Direitos do Trabalhador</a>
                                </li>
                                <li>
                                    <a href="../paginas/noticias.html">Noticias</a>
                                </li>
                                <li>
                                    <a href="../paginas/duvidas.html">Duvidas</a>
                                </li>
                                <li>
                                    <a href="../paginas/sobre.html">Sobre</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="conteudo">

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
                    echo "<table border='1' class='table table-striped'>" .
                    "<thead>" .
                    "<tr>" .
                    "<th>Nome</th>" .
                    "<th>Email</th>" .
                    "<th>Telefone</th>" .
                    "<th>Telefone 2</th>" .
                    "</tr>" .
                    "</theard><tbody>";
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<td>" . " - Nome: " . $row["emp_nome"] . "</td>" .
                            "<td>" . "email: " . $row["emp_email"] . "</td>" .
                            "<td>" . " - Telefone: " . $row["emp_fone"] . "</td>" .
                            "<td>" . "Telefone 2: " . $row["emp_fonecontato"] . "</td>";
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conexao);
                    ?>
                </div>

            </div>
        </div>


    </body>
</html>

