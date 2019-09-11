<h1 style="color: orange;">Lista de Tarefas</h1>

<form method="POST" action="">

    <?php print_r($lista); ?><br>
    <form action="" method="POST">
    Nova tarefa: <br><input type="text" name="nome"><br><br><br><br>
    <button style="color: orange" type="submit">Cadastrar</button>
</form>

</form>








<h2>Acesse o sistema</h2>

<form method="POST" action="">


    <label for="login">email:</label>
    <input id="login" class="form-control" type="text" name="email">

    <label for="passwd">senha:</label>
    <input id="passwd" class="form-control" type="password" name="senha">

    <button type="submit" class="btn btn-primary">vai login</button>

</form>