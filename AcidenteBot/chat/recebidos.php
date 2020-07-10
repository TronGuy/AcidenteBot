<?php

$tipoOcorrencia = $_GET["respostaA"];
$categoriaOcorrencia = $_GET["respostaB"];
$localOcorrencia = $_GET["respostaC"];
$dados = $_GET["respostaD"];


  
 $servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'sistema';

// Conecta-se ao banco de dados MySQL
$mysqli = mysqli_connect($servidor, $usuario, $senha, $banco);

if($tipoOcorrencia != ""){
// Executa uma consulta que deleta uma notícia
$sql = mysqli_query($mysqli,"INSERT INTO OCORRENCIA	 VALUES(default, '$tipoOcorrencia','$categoriaOcorrencia','$localOcorrencia','$dados')"); 

	
while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)){}	
mysqli_close($mysqli);


echo "<h1 style='font-family:sans-serif;'>CHAMADO ABERTO.<br>O RECURSO FOI DIRECIONADO PARA O ATENDIMENTO!</h1>";

}else{
	
	echo "<h1>DEU RUIM</h1>";
	
}




?>
