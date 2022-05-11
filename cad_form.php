<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo-form.css">
    

    <?php
        session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
</head>
<body>
    <div class="box">   
    <form action="cad_form.act.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><b>Formulário de Jogador</b></legend>

        <label for="nome" class="labelInput">Nome</label>
        <input type="text" name="nome"  class="inputUser">

        <label for="posicao" class="labelInput">Posição</label>
        <input type="text" name="posicao"  class="inputUser">

        <label for="time"  class="labelInput">Time</label>
        <input type="text" name="time"  class="inputUser">

        <label for="idade"  class="labelInput">Idade</label>
        <input type="number" name="idade"  class="inputUser">

        <label for="foto" class="labelInput">Foto</label>
        <input type="file" name="foto" class="inputUser" id ="arquivo"> 

        <input type="submit" value="Incluir" id="incluir">
        </fieldset>
    </form>
    </div>
</body>
</html>