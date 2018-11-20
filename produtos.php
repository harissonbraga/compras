<?php
include_once 'model/clsProduto.php';
include_once 'dao/clsProdutoDAO.php';
include_once 'dao/clsConexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Compras M171 - Produtos</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Produtos</h1>
        
        <br><br><br>
        
        <form action="controller/salvarProduto.php?inserir" method="POST" >
            <label>Nome: </label>
            <input type="text" name="txtNome" /> <br><br>
            <label>Quantidade: </label>
            <input type="number" name="txtQuantidade" /> <br><br>
            <label> Preco: </label>
            <input type="number" name="txtPreco" /> <br><br>
            
            <input type="submit" value="salvar" /> 
         
        </form>
        
        <hr>
        
        <?php
            
            $lista = ProdutoDAO::getProdutos();
            
            if ( $lista->count()==0){
                echo '<h2><b>Nenhum Produto cadastrado</b></h2>';
            }else {
                
            
        ?>
        
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preco</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            
            <?php 
                foreach ($lista as $produto) {
                    echo '<tr>
                        <td>'.$produto->getId().'</td>
                        <td>'.$produto->getNome().'</td>
                        <td>'.$produto->getQuantidade().'</td>
                        <td>'.$produto->getPreco().'</td>
                        <td> 
                            <a href="controller/salvarProduto.php?editar&idProduto='.$produto->getId().'">
                            
                            <button>Editar</button></a>
                        </td>
                        <td>
                            <a href="controller/salvarProduto.php?excluir&idProduto='.$produto->getId().'">
                            
                            <button>Excluir</button></a>
                            </td>
                          </tr> ';            
                }
            ?>
            
        </table>
        
        <br><br><br>
        <?php
          }
        ?>
        
    </body>
</html>
