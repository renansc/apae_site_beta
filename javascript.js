function submenumostrar( tipo ){
	var tipo=tipo;
	var item=document.getElementById("submenu");
	 
	if( item.style.display == "inline"){
		item.style.display="none";
		 
		 
	}else{
		item.style.display="inline";
		 
	}
}
function irpara( local ){
	window.location.href="../telas/consultas.php?tipo="+local;
}
function homepage(){
	window.location.href="../index.php";
}
function editar(valor){
	var aux=valor.split(",");
	var nome=aux[0].toUpperCase();
	var coluna=aux[1];
	var tipo=aux[2];
	var valor=aux[3];	
	var novovalor=window.prompt('Editar: '+nome,valor);
	var resposta =confirm("querm mesmo mudar este valor");
	if(resposta == true){
		 window.location.href= "../telas/editaralunos.php?tipo="+tipo+"&id="+nome+"&coluna="+coluna+"&valor="+novovalor.toUpperCase();
	}else{
		alert("banco de dados inalterado!");
	}
}

function apagar(nome){
	alert(nome);
	var aux=nome.split(",");
	var nome=aux[0];
	var tipo=aux[1];
	var resposta =confirm("Excluir: "+nome+tipo);
	if(resposta == true){
		window.location.href="../bd/deletar.php?id="+nome+"&tipo="+tipo;
	}else{
		alert('não excluido');
	}	
}

function relatorioaluno(tipo ){
	window.location.href="../consultas/alunos.php?tipo="+tipo;
}
