<?php 

function getConexao(){
    $conexao = new \PDO("mysql:host=localhost;dbname=cursophpbasico", "root", "nache321");
    
    return $conexao;
}

?>