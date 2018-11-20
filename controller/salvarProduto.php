<?php
include_once '../model/clsProduto.php';
include_once '../dao/clsProdutoDAO.php';
include_once '../dao/clsConexao.php';


if( isset( $_REQUEST['inserir'] ) ){
    $produto = new Produto();
    $produto->setNome( $_POST['txtNome']  );
    
    $quant = $_POST['txtQuantidade'] ;
    $quant = str_replace(",", ".", $quant);
    $produto->setQuantidade( $quant );
    
    $quant = $_POST['txtPreco'] ;
    $quant = str_replace(",", ".", $quant);
    $produto->setPreco( $quant );
    
    ProdutoDAO::inserir($produto);
    
    header("Location: ../produtos.php");
}

if( isset($_REQUEST['excluir'])){
    $id = $_REQUEST['idProduto'];
    echo '<br><br><hr> '
       . '<h3>Confirma a exclusão do Produto  </h3> '
       . '<br><hr>';
    echo  '<a href="?confirmaExcluir&idProduto='.$id.'">'
        . '    <button>SIM</button></a> ';
    echo '<a href="../produtos.php" ><button>NÃO</button></a>';
}

if( isset( $_REQUEST['confirmaExcluir'] ) ){
    $id = $_REQUEST['idProduto'];
    ProdutoDAO::excluir($id);
    header("Location: ../produtos.php");
}

