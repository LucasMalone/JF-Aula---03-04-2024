<?php
require_once "pessoa.php";
require_once "cliente.php";
require_once "clienteVIP.php";

function p($variavel){
    echo "Resultado".$variavel."<br>";
}

$cl = new Cliente();
$clv = new Clientevip();

$cl->setnome("Nome do Cliente");
p($cl->getnome());

$clv->setnome("Nome do Cliente Vip");
p($clv->getnome());


?>
