<?php
require('fpdf.php');
$pdf = new FPDF("P","cm","A4");
$pdf->Open ();
$sql="SELECT * FROM curriculo";
$conect = mysqli_connect("localhost", "root", "", "bancocurriculo.sql");
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
	$pdf->Cell(8);
	// Title
	$pdf->Cell(1,1,'Curriculo');
	// Line break
	$pdf->Ln(2);
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Nome:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_nome']);
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Telefone:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_fone']);
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Data de Nacimento:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_nasc']);
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Descricao:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_descri']);
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Formacoes:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_formacoes']);
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'email:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_email']);
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Escolaridade Atual:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_escolaridade']);
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(1,'Perfil:');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Write(1, $resultado['cur_perfil']);
$pdf->Ln();$pdf->SetFont('Arial','B',14);
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