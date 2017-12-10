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

$sql = "SELECT usu_cod, usu_nome, usu_email, usu_senha, usu_nascimento, usu_fone, usu_celular FROM cad_usuario  ";
$result = mysqli_query($conexao, $sql);
echo "<table border='1'>" .
"<thead>" .
"<tr>" .
"<th>codigo</th>" .
"<th>Nome</th>" .
"<th>Email</th>" .
"<th>senha</th>" .
"<th>Nascimento</th>" .        
"<th>Telefone</th>" .
"<th>celular</th>" .   
"<th>alterar</th>" .   
"<th>Excluir</th>" .           
"</tr>" .
"</theard><tbody>";
if (mysqli_num_rows($result) > 0) {
    // os resultados do banco
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>"."<td>". ".codigo: " . $row["usu_cod"]. "</td>".
               "<td>". " - Nome: " . $row["usu_nome"] ."</td>".
                    "<td>".    "email: " . $row["usu_email"]. "</td>".
                         "<td>". " - senha: " . $row["usu_senha"]. "</td>".
                                       "<td>". "Data de nascimento: " . $row["usu_nascimento"]."</td>".
                                              "<td>".  " - Telefone: " . $row["usu_fone"]."</td>".
                                                      "<td>".  "Celular: " . $row["usu_celular"]."</td>".
                       "<td><a href='alterarUsuario.php?codigo=".$row["usu_cod"]."'>alterar</a></td>".
		"<td><a href='excluirUsuario.php?codigo=".$row["usu_cod"]."'>excluir</a></td>"."</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conexao);
?>