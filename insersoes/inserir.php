<?php 
	$tipo=$_GET['tipo'];
	echo "$tipo";
	if(count($_GET) == 1){
		echo "<form id=aluno>
			<br>Nome<input name='nome' width='30%'></br>
			<br>RG<input name='rg' width='30%'></br>
			<br>CPF<input name='cpf' width='30%'></br>
			<br>NASCIMENTO<input name='nascimento' width='30%'></br>
			<br>CNS<input name='cns' width='30%'></br>
			<br>CGM<input name='cgm' width='30%'></br>
			<br>CERTIDÃO<input name='certidao' width='30%'></br>
			<br><button type='submit' name='tipo' value='alunos'>Enviar</button>
		</form>";		
	}else{
		include('../telas/conexao.php');
		$conexao=conectar();
		$nome=strtoupper($_GET['nome']);
		$sql="INSERT INTO `{$tipo}` (`NOME`, `NASC`, `RG-ALUNO`, `CPF-ALUNO`, `CNS`, `CGM`, `CERTIDAO`) VALUES ('{$nome}' ,'{$_GET['nascimento']}' ,'{$_GET['rg']}' ,'{$_GET['cpf']}' ,'{$_GET['cns']}' ,'{$_GET['cgm']}' ,'{$_GET['certidao']}');";
		echo "<br>$sql</br>";
		if ($resultado = $conexao->query($sql)) {
			echo  '<script type="text/javascript">window.location.href="../telas/consultas.php?tipo='.$tipo.'";</script>';
		}else{
			echo "<br> não inserido!";
		}
		$resultado->close();
	}

?>