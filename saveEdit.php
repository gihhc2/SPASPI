<?php
include_once ('config.php'); 


if(isset($_POST ['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc']; 
    $pedido = $_POST['pedido'];
    $preco = $_POST['preco'];

    $sqlUpdate = "UPDATE tb_clientes set nome = '$nome', cpf ='$cpf', data_nasc='$data_nasc' , pedido='$pedido', preco ='$preco' 
    WHERE id = '$id'";

    $result = $conexao -> query($sqlUpdate); 
}

header ('Location: buscarcli.php'); 
?>
