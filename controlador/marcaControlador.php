<?php
require_once "modelo/marcaModelo.php";

function inserir(){
    if (ehPost()) {
       $Nome = $_POST["Nome"];
       $msg = adicionarMarca($Nome);
       echo $msg;
    
    }else{
        exibir('marcas/cadastrar');
    }
}

