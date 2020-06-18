<?php 
	include('../telas/conexao.php');
	$conexao=conectar();
 	mysqli_set_charset($conexao, "utf8");
	$nome=$_GET['id'];
	$tipo=$_GET['tipo'];
	$coluna=$_GET['coluna'];
	$valor=$_GET['valor'];
	$sql="UPDATE `{$tipo}` SET `{$coluna}`='{$valor}' WHERE `NOME`='{$nome}'";
	echo "<br>sql $sql";
	if ($resultado = $conexao->query($sql)) {
			 echo  '<script type="text/javascript">window.location.href="../telas/consultas.php?tipo='.$tipo.'";</script>';
	}else{
			echo  '<script type="text/javascript">alert("Sql não executada!");</script>';
	}
       $resultado->close();
	
 ?>	
