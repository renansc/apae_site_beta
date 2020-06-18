<?php 
	echo count($_GET);
	if(count($_GET) == 0){
		echo "<form action='../index.php' id=aluno>
		<br>Nome<input name='nome' width='30%'></br>
		<br>Email<input name='email' width='30%'></br>
		<br>Senha<input name='senha' width='30%'></br>
		<br>Confirmar<input name='confirmar' width='30%'></br>
		<br><button type='submit'>Enviar</button>
	</form>";				
	}else{
		include('telas/conexao.php');
		$conexao=conectar();
		$sql="SELECT * FROM `usuarios` WHERE `NOME`='{$_GET['nome']}';";
		echo "<br>$sql</br>";
		if ($resultado = $conexao->query($sql)) {
			$usuario=mysqlI_fetch_assoc($resultado);
			$nome=$usuario['NOME'];
			$tipo=$usuario['TIPO_USUARIO'];
			echo '<script type="text/javascript">window.location.href="../inicio.php?nome='.$nome.'&tipousuario='.$tipo.'";</script>';
		}else{
			echo "<br> não encontrado!</br>";
		}
		$resultado->close();
	}
?>
