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

$sql = "SELECT cur_cod, cur_nome, cur_email, cur_fone, cur_nascimento, cur_descri, cur_formacao FROM curriculos";
$result = mysqli_query($conexao, $sql);
echo "<table border='1'>" .
"<thead>" .
"<tr>" .
"<th>codigo</th>" .
"<th>Nome</th>" .
"<th>Nascimento</th>".
"<th>Email</th>" .
"<th>Descricao</th>" .        
"<th>Formações</th>" .
"<th>celular</th>" .   
"<th>alterar</th>" .   
"<th>Excluir</th>" .           
"</tr>" .
"</theard><tbody>";

if (mysqli_num_rows($result) >  0) {
    // os resultados do banco

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>"
                . "<td>" . $row["cur_cod"]. "</td>"
                . "<td>" . $row["cur_nome"] ."</td>"
                . "<td>" . $row["cur_email"]. "</td>"
                . "<td>" . $row["cur_descri"]. "</td>"
                . "<td>" . $row["cur_nascimento"]."</td>"
                . "<td>" . $row["cur_fone"]."</td>"
                . "<td>" . $row["cur_formação"]."</td>"
                . "<td><a href='alterarUsuario.php?codigo=".$row["cur_cod"]."'>alterar</a></td>"
                . "<td><a href='excluirUsuario.php?codigo=".$row["cur_cod"]."'>excluir</a></td>"
            . "</tr>";
    
    }
} else {
    echo "0 results";
}

mysqli_close($conexao);
