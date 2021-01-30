<?php
require_once 'conectar.php';

$nome = $_POST['nomeCriar']; 
$email = $_POST['emailCriar'];
$tel = $_POST['telCriar'];
$cpf = $_POST['cpfCriar'];


$criar = "INSERT INTO `biblioteca`.`pessoas` (`nome`, `email`, `telefone`, `cpf`) VALUES ('$nome', '$email', '$tel', '$cpf')";

$comando = mysqli_query($con, $criar);

if($comando == true){

echo "<script language='javascript' type = 'text/javascript' > alert('Criado com sucesso!');window.location.href = '../index.html'; </script>";


}else{
    echo "<script language='javascript' type = 'text/javascript' > alert('Falha ao criar');window.location.href = '../index.html'; </script>";
}



?>