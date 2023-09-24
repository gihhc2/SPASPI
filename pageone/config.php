<!--Conexão BD -->


<?php
    $dbhost = 'Localhost';
    $dbusername = 'root';
    $dbPassword = 'Gisele@2011!'; 
    $dbName= 'clientes';

    $conexao = new mysqli($dbhost,$dbusername,$dbPassword,$dbName);


    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //
    //else 
    //{
    //    echo "Conexão efetuada";
    //}
?> 