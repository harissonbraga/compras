<?php

/**
 * Description of clsCidade
 *
 * @author assparremberger
 * 25/10/2018
 */
class Cidade {
    private $id;
    private $nome;
    private $quantidade;
    private $preco;
    
    public function __construct($id = NULL, $nome = NULL, $quantidade = NULL, $preco = NULL){
        $this->id = $id;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco; 
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
function getQuantidade() {
        return $this->quantidade;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
function getPreco() {
        return $this->preco;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }
}
