<?php
use PSpell\Config;

    if(!empty($_GET['id']))
    {
        include_once('config.php'); 

        $id = $_GET['id']; 
        $sqlSelect = "SELECT * FROM tb_clientes WHERE id = $id";

        $result = $conexao ->query($sqlSelect); 

        if ($result -> num_rows >0)
        {
                while($user_data = mysqli_fetch_assoc($result))
                {
                    $nome = $user_data['nome'];
                    $cpf = $user_data['cpf'];
                    $data_nasc = $user_data['data_nasc']; 
                    $pedido = $user_data['pedido'];
                    $preco = $user_data['preco'];
                }
        }
        else 
        {
            header('Location: buscarcli.php');
        }
    }

    else 
        {
            header('Location: buscarcli.php');
        }
    

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/edit.css" media="screen" />
    <style> 
    #update{
    background-image: linear-gradient(to right, rgb (0, 92, 197), rgb(90, 20, 220));
    width: 100%;
    border: none;
    padding: 15px;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
     }

     #update:hover{
            background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
                    }

    </style> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Product</title> 

</head>
<body>
    <p></p>
    <a href = "buscarcli.php"> Voltar</a>    
    <br></br>
    <br></br>

    
    <div class = "box"> 
        <form action="saveEdit.php" method="POST"> 
            <fieldset>
               <legend><b>PEDIDOS DE CLIENTES</b> </legend> 
               <br>
               <div class = "inputBox"> 
                    <input type="text" name="nome" id="nome" class="inputUser" value = "<?php echo $nome?>" required>
                    <label for="name" class="labelInput"> <b>NOME CLIENTE</b></label>
               </div>
               <br><br> 
               <div class = "inputBox"> 
                    <input type="text" name="cpf" id="cpf" class="inputUser" value = "<?php echo $cpf?>" required >
                    <label for="cpf" class="labelInput"><b>CPF CLIENTE</b></label>
               </div>
               <br><br> 
               <div class = "inputBox"> 
                    <input type="date" name="data_nasc" id="data_nasc" class="inputUser" value = "<?php echo $data_nasc?>"  required>
                    <label for="data_nasc" class="labelInput"><b>DATA DE NASCIMENTO</b></label>
               </div>
               <br><br> 
               <div class = "inputBox"> 
                    <input type="text" name="pedido" id="pedido" class="inputUser" value = "<?php echo $pedido?>"  required>
                    <label for="pedido" class="labelInput"><b>PEDIDO</b></label>
               </div>
               <br><br> 
               <div class = "inputBox"> 
                    <input type="number" name="preco" id="preco" class="inputUser" value = "<?php echo $preco?>" required>
                    <label for="preco"><b>PREÇO PRODUTO</b></label>
                </div>
                <br><br> 
                <input type="hidden" name="id" value="<?php echo $id ?>"> 
                <input type = "submit" name="update" id="update"> 
            </fieldset>
        </form>
    </div>
</body>
</html>