<?php

function getInfo($atributo){
    $dados = ["titulo"=>"Site Modelo", "descricao"=>"Programando com PHP."];
    return $dados[$atributo];
}

include('API/api.php');
include('Layouts/site.php');
?>




