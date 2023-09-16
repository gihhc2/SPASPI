<?php
use PSpell\Config;

    if(isset($_POST['submit']))
    {
        include_once('config.php'); 

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data_nascimento = $_POST['data_nascimento']; 
        $pedido = $_POST['pedido'];
        $preco = $_POST['preco'];
        $result = mysqli_query($conexao, "INSERT INTO tb_clientes(nome, cpf, data_nasc, pedido, preco) 
        VALUES ('$nome', '$cpf', '$data_nascimento', '$pedido', '$preco')");
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Product</title>
</head>
<style> 
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        border-radius: 15px;
    }
    legend {
        padding: 10px;
        text-align: center;
    }
    .inputUser{
        font-size: 15px;
        width: 100%;
    }

    #submit {
        width: 100%;

    }
</style>
<body>
    <div class = "box"> 
        <form action="form.php" method="POST"> 
            <fieldset>
               <legend><b>PEDIDOS DE CLIENTES</b> </legend> 
               <br>
               <div class = "inputBox"> 
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="name" class="labelInput"> <b>NOME CLIENTE</b></label>
               </div>
               <br><br> 
               <div class = "inputBox"> 
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput"><b>CPF CLIENTE</b></label>
               </div>
               <br><br> 
               <div class = "inputBox"> 
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                    <label for="data_nascimento" class="labelInput"><b>DATA DE NASCIMENTO</b></label>
               </div>
               <br><br> 
               <div class = "inputBox"> 
                    <input type="text" name="pedido" id="pedido" class="inputUser" required>
                    <label for="pedido" class="labelInput"><b>PEDIDO</b></label>
               </div>
               <br><br> 
               <div class = "inputBox"> 
                    <input type="number" name="preco" id="preco" class="inputUser" required>
                    <label for="preco"><b>PREÇO PRODUTO</b></label>
                </div>
                <br><br> 
                <input type = "submit" name="submit" id="submit"> 
            </fieldset>
        </form>
    </div>
</body>
</html>