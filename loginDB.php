<?php 


$mysqli = new mysqli( 'localhost', 'root', '', 'usuario');
if ($mysqli->connect_errno) {
    die("Falha ao conectar". $mysqli->connect_error);
    
}else{
    echo "conectado";

};








 ?>