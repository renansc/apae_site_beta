 <?php
$id =$_GET['id'];
$valor =$_GET['valor'];
$tipo =$_GET['tipo'];
$coluna =$_GET['coluna'];
$mysqli = new mysqli("localhost", "renan", "hacker", "apae");
echo "<br>conexão ao bd ok!l ";
echo "<br> recebido dados $id $valor $tipo $coluna";
$sql="UPDATE $tipo SET `$coluna`='$valor' WHERE `NOME`='$id';";
echo "<br>$sql";
if ($mysqli->query($sql) === TRUE) {
   echo "<script type='text/javascript'> window.location.href= '../consultas/consultas.php?tipo=$tipo';</script>";
} else {
  echo "Erro ".$mysqli->error;
}
$mysqli->close();
?>
 
