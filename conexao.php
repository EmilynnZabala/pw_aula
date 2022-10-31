<?php
    $servidor = "Localhost";
    $usuario = "empregos";
    $senha = "12345678";
    $banco = "empregosAA";


    $cn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>
