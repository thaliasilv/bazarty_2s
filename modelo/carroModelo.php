<?php
//1
function cadastrar($marca, $modelo, $ano, $placa, $cor){
    $comando= "INSERT INTO Carro (id_marca, modelo, ano, placa, cor) Values ('$marca', '$modelo', '$ano', '$placa', '$cor')";
    $resultado= mysqli_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao cadastrar o carro'. mysqli_error($cnx)); }
    return 'Carro cadastrado com sucesso!';
}



