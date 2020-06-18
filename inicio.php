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
	  <img id="icone" onclick="homepage();" src="../imagens/icone.png"  alt="Página Inicial">
		<figcaption><?php echo $_GET['nome']."-".$_GET['tipousuario']; ?></figcaption>
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


<section>
	<br>Inserir novo aluno</br><a href="../insersoes/inserir.php?tipo=alunos">+</a>
</section>

<article>
	<br>conteudo da article</br>
</article>

<aside>
	<br>conteudo da aside</br>
</aside>

<footer>
	<br> Desenvolvido por Renan Santos Coutinho renanrocks2009@gmail.com  Tecnologias javascript, css3, html5, php</br>
</footer>
</body>
</html>
 
