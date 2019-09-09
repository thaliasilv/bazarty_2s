
<form action="" method="POST" enctype="multipart/form-data">
            
            Marca:<br> 
            <select name="marca">
                <option value="default">Selecione a marca</option>
                <?php foreach ($marcas as $marca):?>
                <option value="<?=$marca["id_marca"]?>"><?=$marca["descricao"]?></option>
                <?php endforeach;?>
            </select><br><br>
            Modelo: <br> <input type="text" name="modelo"><br><br>
            Ano:<br> <input type="text" name="ano"><br><br>
            Placa: <br> <input type="text" name="placa"><br><br>
            Cor: <br><input type="text" name="cor"><br><br><br><br>
            <button style="color: orange" type="submit">Enviar</button>
            <br> <br>
            
            <a style="color: orange" href="./carro/listar/">Ver carros cadastrados</a>

</form>

