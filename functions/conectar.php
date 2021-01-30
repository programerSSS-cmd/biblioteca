<?php

$con = mysqli_connect('localhost', 'root', '', 'biblioteca', '3306');

if(!$con){

    echo"<script language='javascript' type = 'text/javascript' > alert('Falha ao Conectar...');window.location.href = '../index.html'; </script>";
 
}

?>
