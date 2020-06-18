 <?php
$tipo =$_GET['tipo'];
$valor =$_GET['id'];
$mysqli = new mysqli("localhost", "renan", "hacker", "apae");
echo "<br>conexão ao bd ok!l ";
echo "<br> recebido dados  $valor";
//$sql="UPDATE $tipo SET `$coluna`='$valor' WHERE `NOME`='$id';";
$sql= "DELETE FROM `$tipo` WHERE `NOME`='$valor';";
echo "<br>$sql";
if ($mysqli->query($sql) === TRUE) {
   echo "<script type='text/javascript'> window.location.href= '../telas/consultas.php?tipo=$tipo';</script>";
} else {
  echo "Erro ".$mysqli->error;
}
$mysqli->close();
?>
 
