<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="alterar.css">
</head>
<body>
    <?php
    require('connect.php');
    $codigo = $_GET['codigo'];
    $contato = mysqli_query($con, "Select * from `td_cliente` where `codigo`= '$codigo'");
    $contato =  mysqli_fetch_array($contato);
    ?>

<div class="box">   
    <img src="<?php echo $contato['url']; ?>" alt="">
    <form action="alterar.act.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><b>Formulário de Jogador</b></legend>

        <input type="hidden" name ="foto_anterior" value ="<?php echo $contato['url']; ?>">
        <input type="hidden" name="codigo" value="<?php echo $contato['codigo']; ?>">

        <label for="nome" class="labelInput">Nome</label>
        <input type="text" name="nome"  class="inputUser" value ="<?php echo $contato['nome']; ?>">

        <label for="posicao" class="labelInput">Posição</label>
        <input type="text" name="posicao"  class="inputUser" value ="<?php echo $contato['posicao']; ?>">

        <label for="time"  class="labelInput">Time</label>
        <input type="text" name="time"  class="inputUser" value ="<?php echo $contato['time']; ?>">

        <label for="idade"  class="labelInput">Idade</label>
        <input type="number" name="idade"  class="inputUser" value ="<?php echo $contato['idade']; ?>">

        <label for="foto" class="labelInput">Foto</label>
        <input type="file" name="foto" class="inputUser" id ="arquivo"> 

        <input type="submit" value="Alterar" id="incluir">
        </fieldset>
    </form>
    </div>
</body>
</html>