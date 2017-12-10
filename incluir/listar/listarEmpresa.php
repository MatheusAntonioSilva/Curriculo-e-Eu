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

$sql = "SELECT emp_cod, emp_cnpj, emp_nome, emp_email, emp_senha, emp_fone, emp_fonecontato FROM cad_empresa  ";
$result = mysqli_query($conexao, $sql);
echo "<table border='1'>" .
"<thead>" .
"<tr>" .
"<th>codigo</th>" .
"<th>CNPJ</th>". 
"<th>Nome</th>" .
"<th>Email</th>" .
"<th>senha</th>" .     
"<th>Telefone</th>" .
"<th>Telefone 2</th>" .   
"<th>alterar</th>" .   
"<th>Excluir</th>" .           
"</tr>" .
"</theard><tbody>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>"."<td>". ".codigo: " . $row["emp_cod"]. "</td>".
                "<td>". "CNPJ: " . $row["emp_cnpj"]."</td>".
                    "<td>". " - Nome: " . $row["emp_nome"] ."</td>".
                        "<td>".    "email: " . $row["emp_email"]. "</td>".
                                "<td>". " - senha: " . $row["emp_senha"]. "</td>".
                                     "<td>".  " - Telefone: " . $row["emp_fone"]."</td>".
                                        "<td>".  "Telefone 2: " . $row["emp_fonecontato"]."</td>".
                                                      
                       "<td><a href='alterarUsuario.php?codigo=".$row["emp_cod"]."'>alterar</a></td>".
		"<td><a href='excluirUsuario.php?codigo=".$row["emp_cod"]."'>excluir</a></td>"."</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conexao);
?>