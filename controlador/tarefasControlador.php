<?php

function listinha(){
    
    if(ehPost()){
        $_SESSION["tarefas"] = $_POST["nome"];
        $lista[] = $_SESSION["tarefas"];
        $dados["lista"] = $lista;
        $_SESSION["tarefas"] = $lista;
        exibir("login/index", $dados);
    }
    
    $lista[] = $_SESSION["tarefas"];
    $dados["lista"] = $lista;
    $_SESSION["tarefas"] = $lista;
    exibir("login/index", $dados);
    
}

