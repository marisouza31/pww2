<?php

//Classe
public class Pessoa(){
    //Atributos
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //Metodo GET
    public function getNome(){
        return $this->nome;
    }
    //Metodo SET
    public function setNome($nome){
        $this->nome = $nome;
    }
    /*
    .
    .
    .
deve-se colocar todos os metodos GET e SET correspondente a classe()
*/
}

?> 
