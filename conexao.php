<?php

$server = "localhost";
$user ="root";
$pass ="";

$bd ="cadastro";

if ( $conn = mysqli_connect($server, $user, $pass, $bd) ){
  //  echo "conectado!";
} else
echo " erro!";

?>