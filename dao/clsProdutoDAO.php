<?php
/**
 * Description of clsCidadeDAO
 *
 * @author assparremberger
 * 26/10/2018
 */

class ProdutoDAO {
    
    public static function inserir( $produto ){
        $sql = "INSERT INTO produtos ( nome, quantidade, preco ) VALUES "
                . " ( '".$produto->getProduto()."' ,"
                . " ( ".$produto->getProduto()." ,"
                . " ( ".$produto->getProduto()." ,";
                
                
        Conexao::executar($sql);
        
    }
    
    public static function editar( $produto ){
        $sql =    "UPDATE produtos SET "
                . " nome = '".$produto->getProduto()."' "
                . " quantidade = ".$produto->getProduto()." "
                . " preco = ".$produto->getProduto()." "
                
                . " WHERE id = ".$produto->getId();
        Conexao::executar($sql);
        
    }
    public static function excluir( $idProduto ){
        $sql =    "DELETE FROM produtos "
                . " WHERE id = ".$idProduto;
        Conexao::executar($sql);
        
    }
    
    public static function getProdutos(){
        $sql = "SELECT id, nome, quantidade, preco FROM produtos ORDER BY nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_nome, $_quantidade, $_preco) = mysqli_fetch_row($result) ){
                $produto = new Produto();
                $produto->setId($_id);
                $produto->setNome($_nome);
                $produto->setQuantidade($_quantidade);
                $produto->setPreco($_preco);
                $lista->append($produto);
            }
        }
        return $lista;
    }
    
    
}











