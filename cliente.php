<?php

class cliente  extends Pessoa {

    public $pontos;
    
    public function Somapontos($pontos){
        //rECUPERAR OS PONTOS DO BANCO DE DADOS
        //SOMAR $PONTOS
        //ATUALIZAR O BANCO DE DADOS
        $this->ValidaPontos();
        $this->pontos= $this->pontos +$pontos;
    }

public function ValidaPontos (){
    // verifica a validade dos pontos
}

public function getPontos (){
    $this->ValidaPontos();
}
}