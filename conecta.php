<?php
$conexao = mysqli_connect('mysql03.quattoracademia.com.br','quattoracademia2','platao7777','quattoracademia2');

function listaAulasGinastica($conexao){
        $dia = date('w');
        $aulas = array();
        $resultado = mysqli_query($conexao, "select * from ginastica where tipo='ginastica' and dia = '{$dia}' order by hora");    
        while ($aula = mysqli_fetch_assoc($resultado)){
            array_push($aulas, $aula); 
    }   
        return $aulas;
}

function listaAulasPiscina($conexao){
        $dia = date('w');
        $aulas = array();
        $resultado = mysqli_query($conexao, "select * from ginastica where tipo='piscina' and dia = '{$dia}' order by hora");    
        while ($aula = mysqli_fetch_assoc($resultado)){
            array_push($aulas, $aula); 
    }   
        return $aulas;
}

function listaAulasLuta($conexao){
        $dia = date('w');
        $aulas = array();
        $resultado = mysqli_query($conexao, "select * from ginastica where tipo='luta' and dia = '{$dia}' order by hora");    
        while ($aula = mysqli_fetch_assoc($resultado)){
            array_push($aulas, $aula); 
    }   
        return $aulas;
}

function listaAulasLutaSeg($conexao){
        $dia = date('w');
        $aulas = array();
        $resultado = mysqli_query($conexao, "select * from ginastica where tipo='luta' and dia = 1 order by hora");    
        while ($aula = mysqli_fetch_assoc($resultado)){
            array_push($aulas, $aula); 
    }   
        return $aulas;
}
