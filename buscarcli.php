<?php
    include_once ('config.php'); 

    if(!empty($_GET['search']))
    {
        $data = $_GET['search']; 
        $sql = "SELECT * FROM tb_clientes where cpf like '%$data%'";
    }
    else {
        $sql = "SELECT * FROM tb_clientes";
    }
    $result = $conexao->query($sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/buscarcli.css" media="screen" />
    <title>Buscar Cliente</title>
</head>
<body>
    <br></br>   
    <a href = "home.php">Voltar</a> 
    <br></br>
    <p></p> 
    <header> 
    <b>
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
        </svg> ALTERAÇÃO | BUSCA DE CLIENTES </b>
    <p></p>
</header>
    <div class = "box-search"> 
        <input type="search" class = "form-control w-25" placeholder= "DIGITE O CPF" id = "pesquisar">
        <button onclick="searchData()" class = "btn btn-outline-info">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>         
     </div>
    <p></P>
    <div class = "m-5">
        <table width="50%" border="1" cellspacing="10" cellpadding="4" align = "center" class = "table table-bg" > 
            <thead> 
                <tr> 
                    <th scape = "col">ID</th> 
                    <th scape = "col">NOME</th> 
                    <th scape = "col">CPF</th> 
                    <th scape = "col">DATA NASCIMENTO</th> 
                    <th scape = "col">PEDIDO</th> 
                    <th scape = "col">PREÇO</th> 
                    <th scape = "col">AÇÕES</th>
                </tr>   
            </thead>
            <tbody> 
                <?php
                    while ($user_data = mysqli_fetch_assoc($result))
                    { 
                        echo "<tr>"; 
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['cpf']."</td>";
                        echo "<td>".$user_data['data_nasc']."</td>";
                        echo "<td>".$user_data['pedido']."</td>";
                        echo "<td>".$user_data['preco']."</td>";
                        echo "<td>
                            <a class = 'btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                </svg>    
                            </a>
                            <a class = 'btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }

                ?> 
                </tbody> 
        </table>
    </div> 
</body>
<script> 
    var search = document.getElementById('pesquisar');

        search.addEventListener("keydown", function(event){
            if (event.key === "Enter")
            {
                searchData();
            }
        });
    function searchData()
    {
        window.location = 'buscarcli.php?search='+search.value; 
    }
</script>
</html>