<?php

$aula = strtoupper($_GET ["aula"]);
$dia = $_GET ["dia"];
$hora = $_GET ["hora"];
$tipo = $_GET ["tipo"];

include("conecta.php");
$query = "insert into ginastica (aula, dia, hora,tipo) values ('{$aula}','{$dia}','{$hora}','{$tipo}')";
$resultadoDaInsercao = mysqli_query($conexao, $query);
    
    
    if($resultadoDaInsercao){
        echo "<script>window.location='insere.php';alert('$aula, foi cadastrada com sucesso');</script>";
        ?>

    <?php 
        
    } else{
        ?>
    <p class="alert-success">Error</p>
    <?php    
        }
    
?>
