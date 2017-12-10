<?php
  session_start();
require('fpdf.php');
$pdf = new FPDF("P","cm","A4");
$pdf->Open ();
//session_cache_limiter(’private’);

  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancocurriculo.sql";
$codigo = $_GET["id"];//$_SESSION["codigo_curriculo"];
 $conect = mysqli_connect("localhost", "root", "", "bancocurriculo.sql");
  
$sql="SELECT * FROM curriculo WHERE cur_cod = '".$codigo."' limit 1";
//$sql="SELECT * FROM curriculo ";
$db = mysqli_select_db($conect,"bancocurriculo.sql");
if (!$conect) {
    die("Falha na conexao com o Banco de Dados". mysqli_error($conect));
}
$exe_sql=  mysqli_query($conect,$sql) or die (mysqli_error($conect));
while($resultado= mysqli_fetch_array($exe_sql))

{
   
$pdf->AddPage();
 $pdf->SetFont('Arial','B',16);
	// Move to the right
	$pdf->Cell(6);
	// Title
$pdf->Cell(0, 1, $resultado['cur_nome']);
$pdf->Ln();
$pdf->Cell(5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(10, 2, $resultado['cur_nascionalidade']);
$pdf->Cell(-8.2);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,2, $resultado['cur_estadocivil']);
$pdf->Cell(-10.6);
$pdf->Cell(0, 2, 'Nascido em:');
$pdf->Cell(-8.3);
$pdf->Cell(0,2, $resultado['cur_nasc']);
$pdf->Ln();
$pdf->Cell(3);
$pdf->SetFont('Arial','',11);
$pdf->Cell(10, -1, $resultado['cur_endereco']);
$pdf->Cell(-4);
$pdf->SetFont('Arial','',11);
$pdf->Cell(3,-1, 'Bairro:');
$pdf->Cell(-1.8);
$pdf->SetFont('Arial','',11);
$pdf->Cell(3,-1, $resultado['cur_bairro']);
$pdf->Cell(0.1);
$pdf->SetFont('Arial','',11);
$pdf->Cell(3,-1, $resultado['cur_cidade']);
$pdf->Cell(-1.8);
$pdf->SetFont('Arial','',11);
$pdf->Cell(3,-1, $resultado['cur_UF']);
$pdf->Ln();
$pdf->Cell(4);
$pdf->SetFont('Arial','',11);
$pdf->Cell(3,2.2, 'Telefone:');
$pdf->Cell(-1.2);
$pdf->SetFont('Arial','',11);
$pdf->Cell(3,2.2, $resultado['cur_fone']);
$pdf->Cell(2);
$pdf->SetFont('Arial','',11);
$pdf->Cell(3,2.2, 'Celular:');
$pdf->Cell(-1.5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(3,2.2, $resultado['cur_celular']);
$pdf->Cell(-1.5);
$pdf->Ln();
$pdf->Cell(6);
$pdf->SetFont('Arial','',11);
$pdf->Cell(3,3.2, 'Email:');
$pdf->Cell(-1.8);
$pdf->SetFont('Arial','',12);
$pdf->Cell(3,3.2, $resultado['cur_email']);
$pdf->Ln();
	// Line break
	$pdf->Ln(2);
//*$pdf->SetFont('Arial','B',14);
//*$pdf->Write(1,'Dados Pessoais:');
//*$pdf->Ln();

//*$pdf->SetFont('Arial','B',14);
//*$pdf->Write(1,'Nome:');
//*$pdf->Ln();
//*$pdf->SetFont('Arial','',12);
//*$pdf->Write(1, $resultado['cur_nome']);
//*$pdf->Ln();
//*$pdf->SetFont('Arial','B',14);
//*$pdf->Write(1,'Endereco:');
//*$pdf->Ln();
//*$pdf->SetFont('Arial','',12);
//*$pdf->Write(1, $resultado['cur_endereco']);
//*$pdf->Ln();
//*$pdf->SetFont('Arial','B',14);
//*$pdf->Write(1,'Bairro:');
//*$pdf->Ln();
//*$pdf->SetFont('Arial','',12);
//*$pdf->Write(1, $resultado['cur_bairro']);
//*$pdf->Ln();
//*$pdf->SetFont('Arial','',12);
//*$pdf->Write(1, $resultado['cur_cidade']);
//*$pdf->Ln();
//*$pdf->SetFont('Arial','B',14);
//*$pdf->Write(1,'CEP:');
//*$pdf->Ln();
//*$pdf->SetFont('Arial','',12);
//*$pdf->Write(1, $resultado['cur_cep']);
//*$pdf->Ln();
//*$pdf->SetFont('Arial','B',14);
//*$pdf->Write(1,'Telefone:');
//*$pdf->Ln();
//*$pdf->SetFont('Arial','',12);
//*$pdf->Write(1, $resultado['cur_fone']);
//*$pdf->Ln();
//*$pdf->SetFont('Arial','B',14);
//*$pdf->Write(1,'Celular:');
//*$pdf->Ln();
//*$pdf->SetFont('Arial','',12);
//*$pdf->Write(1, $resultado['cur_celular']);
//*$pdf->Ln();
//*$pdf->SetFont('Arial','B',14);
//*$pdf->Write(1,'Data de Nacimento:');
//*$pdf->Ln();
//*$pdf->SetFont('Arial','',12);
//*$pdf->Write(1, $resultado['cur_nasc']);
//*$pdf->Ln();
//*$pdf->SetFont('Arial','B',14);
//*$pdf->Write(1,'Estado Civil:');
//*$pdf->Ln();
//*$pdf->SetFont('Arial','',12);
//*$pdf->Write(1, $resultado['cur_estadocivil']);
//*$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Formacao Escolar:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_formacoes']);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
//*$pdf->SetFont('Arial','B',14);
//*$pdf->Write(1,'email:');
//*$pdf->Ln();
//*$pdf->SetFont('Arial','',12);
//*$pdf->Write(1, $resultado['cur_email']);
//*$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Cursos complementares:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_escolaridade']);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Perfil:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_perfil']);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Objetivos:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_objetivos']);
$pdf->Ln();

}
$pdf ->Output();


/*<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
 * $pdf->Cell(5,1, $resultado['cur_nome'],1,0,'L');
    $pdf->Cell(5,1, $resultado['cur_fone'],1,0,'L');
    $pdf->Cell(5,1, $resultado['cur_nasc'],1,0,'L');
 * 
 * 
 * $pdf=new FPDF('P','cm','A4');
 */


/*define('FPDF_FONTPATH', 'font/');
require ('pdf.php');
$pdf=new FPDF('P','cm','A4');
$pdf->Open ();
$pdf->AddPage();
$pdf->SetFont('times','','12');
$sql="SELECT * FROM curriculo";
$conect = mysqli_connect("localhost", "root", "", "bancocurriculo.sql");
if ("$conect") die ("<h1>Falha na conexão com o Banco de Dados</h1>");
$db = mysqli_select_db("bancocurriculo.sql");
$exe_sql=  mysqli_query($sql) or die (mysqli_error());
while($resultado= mysqli_fetch_array($exe_sql))
{
    $pdf->Cell(5,1, $resultado['cur_nome'],1,0,'L');
    $pdf->Cell(5,1, $resultado['cur_fone'],1,0,'L');
    $pdf->Cell(5,1, $resultado['cur_nasc'],1,0,'L');
}
$pdf ->Output();
 * 
 */
?>