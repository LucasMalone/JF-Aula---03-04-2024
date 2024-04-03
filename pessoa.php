<?php
class Pessoa {

public $nome;
public $email;
public $Telefone;


public function setNome($nome){
    $this->nome = $nome;
} 
public function getNOme(){
    return $this->nome;
}
}
?>