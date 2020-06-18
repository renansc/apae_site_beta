<?php 
	function todosalunos($tipo){
	include('../telas/conexao.php');
	$conexao=conectar();
	$sql="SELECT * FROM `$tipo`";
	$arquivo=fopen("../modulosbd/$tipo.txt","r");
	$linha=fgets($arquivo);
	$linha=explode(",",$linha);	
	array_pop($linha);
	echo "<tr>";
	foreach($linha as $coluna){
		if($coluna == "NOME"){
				echo "<th   width='30%' class='titulo'>".$coluna."</th>";
		}else{
			echo "<th class='titulo'>".$coluna."</th>";
		}
	}
	echo "</tr>";
	if ($resultado = $conexao->query($sql)) {
			$cont=0;
			while ($exibe = mysqlI_fetch_assoc($resultado) ) {     
				foreach($linha as $coluna){
					$valor=$exibe[$coluna];
		 			if($linha[0] && $coluna == "NOME"){
						 $nome=$exibe[$coluna]; 	
						echo "<tr><th  onclick='editar(this.id);' id='$nome,$coluna,$tipo,$valor' align='left'   size=18 value='$valor'>$valor</th>";			
					}else{
						echo "<th  onclick='editar(this.id);' id='$nome,$coluna,$tipo,$valor' name='$nome,$coluna,$tipo' size=18 value='$valor'>$valor</th>";
					}
				}
				$cont+=1;
				echo "<th  onclick='apagar(this.id)' id='$nome,$tipo' size=5  value='apagar'>Apagar</th></tr>";
			}
			 
		       $resultado->close();
	}
       }

 ?>	
