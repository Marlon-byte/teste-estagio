<?php 


$nome=$_POST['nome'];
$data=$_POST['date'];
$doc=$_POST['doc'];
$sexo =$_POST['sexo'];
$situacao =$_POST['situacao'];
$log =$_POST['log'];
$num =$_POST['num'];
$bairro =$_POST['bairro'];
$cidade =$_POST['cidade'];
$estado =$_POST['estado'];
$email =$_POST['email'];
$tel =$_POST['tel'];

$servidor="infornet.com.br";
$usuario="infor430_marlon";
$senha="erj{rt#?2Qla";
$dbname="infor430_php_marlon";


// Create connection
$conn = new mysqli($servidor, $usuario, $senha, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO beneficiario ( nome, documento, dataNascimento, sexo, situacao, logradouro, numero, bairro, cidade, estado, email, telefone) VALUES('$nome','$doc','$data','$sexo','$situacao','$log','$num','$bairro','$cidade','$estado','$email','$tel')";


if ($conn->query($sql) === TRUE) {

  header("Location:index.php");


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>