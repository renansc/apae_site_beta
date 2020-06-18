<html>
 <head>
 <link href="../estilos.css" rel="stylesheet" type="text/css">
 <link rel="icon" type="imagem/png" href="../imagens/icone.png" />
 <script type="text/javascript" src="../javascript.js"></script>
 <title>Pesquisa</title>
 </head>
 <body>
<header>
	<figure>
	  <img onclick="homepage();" id="icone" src="../imagens/icone.png"  alt="Página Inicial"> 
	</figure>
	<div id="submenu" onmouseleave="submenumostrar('alunos');">
		<br><button onclick="irpara('alunos');">Alunos</button></br>
  		<br><button onclick="irpara('pais');">Pais</button></br>
  		<br><button onclick="irpara('maes');">Mães</button></br>
  		<br><button onclick="irpara('responsaveis');">Responsáveis</button></br>
  		<br><button onclick="irpara('contatos');">Contatos</button></br>
	</div>
 </header>
<nav>
  <button onclick="irpara('funcionarios');">Funcionários </button>
  <button onclick="irpara('usuarios');">Usuários </button>
  <button onmouseenter="submenumostrar('alunos');">Alunos </button>
</nav>

<div class="conteudo">
	<table>
		<?php
			$tipo=$_GET['tipo'];
			include('../telas/consultaralunos.php');
			todosalunos($tipo);
		?>
	</table>
</div>

<footer>
	<br> Desenvolvido por Renan Santos Coutinho renanrocks2009@gmail.com  Tecnologias javascript, css3, html5, php</br>
</footer>
</body>
</html>

