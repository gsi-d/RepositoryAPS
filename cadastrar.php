<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastrar produto</h2>

    <br/><br/>

    <?php
        if (isset($_GET['codigo'])){

            echo $_GET['codigo'];

        }

        if (isset($_GET['referencia'])) {

            echo $_GET['referencia'];

        }
    ?>

    <form action="cadastrar.php" method="post">
        <br/>
        <label>Nome</label>
        <input type="text" name="nome"/>
        <input type="hidden" name="valor" value="85"/>

        <label>Descricao</label>
        <input type="text" name="descricao"/>

        <button type="submit">Enviar</button>
    </form>

    <br/><br/>
    <?php
        if (isset($_POST['nome'])){
            echo $_POST['nome'];
        }

        if (isset($_POST['descricao'])){
            echo '<br/>';
            echo $_POST['descricao'];
        }
    ?>
</body>
</html>