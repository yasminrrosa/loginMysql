<?php

include 'login.php';

if (isset($_POST['btn-enviar'])){

    include_once 'loginDB.php';

    $nome = $_POST['login'];
    $senha = $_POST['senha'];





$alimentar_db = mysqli_query($mysqli, "INSERT INTO login(Login, Senha) VALUES('{$nome}','{$senha}");

}

?>