<?php
include ('conexao.php');
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
/* criar codigo sql */
$sql = "INSERT INTO reservas (nome,cpf,email,telefone)
values(:nome,:cpf,:email,:telefone)";

$inserir = $conn->prepare($sql);
$inserir->bindParam(':nome',$nome);
$inserir->bindParam(':cpf',$cpf);
$inserir->bindParam(':email',$email);
$inserir->bindParam(':telefone',$telefone);

$resultado = $inserir->execute();
if (! $resultado) {
  var_dump($inserir->errorInfo());
  exit;
}
echo $inserir->rowCount(). "linhas";
header('Location:Home.html');
 ?>
