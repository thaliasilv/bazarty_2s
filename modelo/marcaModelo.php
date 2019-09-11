<?php

function adicionarMarca($Nome){
    $comando= "INSERT INTO Marca (descricao) Values ('$Nome')";
    $resultado= mysqli_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao cadastrar a marca'. mysqli_error($cnx)); }
return 'Marca cadastrada com sucesso!';

}

function seleciona_todas_as_marcas(){
    $sql = "select * from Marca";
    $result = mysqli_query(conn(), $sql);
    $marcas = array();
    while($linha = mysqli_fetch_assoc($result)){
        $marcas[] = $linha;
    }
    return $marcas;
}

