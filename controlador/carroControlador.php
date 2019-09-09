<?php

require_once "modelo/carroModelo.php";
require_once "modelo/marcaModelo.php";

function adicionar(){
    if(ehPost()){
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $ano = $_POST['ano'];
        $placa = $_POST['placa'];
        $cor = $_POST['cor'];
        
        $msg = cadastrar($marca, $modelo, $ano, $placa, $cor);
        echo $msg;
        //redirecionar("carro\listar");
    }else{
        $dados["marcas"] = seleciona_todas_as_marcas();
        exibir('carro/cadastro', $dados);
    }
}


           
  
    