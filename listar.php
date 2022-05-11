<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
@import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');

*{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
}

body{
    background-color: #229757;
    font-family: 'Acme', sans-serif;
}

h1{
    text-align: center;
    font-size: 40px;
    font-family: 'Acme', sans-serif;
}

.alertaGreen{
    position: absolute;
    border: solid 5px dodgerblue;
    background-color: rgb(41, 65, 171);
    border-radius: 8px;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 44%;
    margin-left: 41%;
    width: 18%;
}


fieldset{
    border: solid 4px white;
    width: 90%;
    margin-left: 60px;
}

legend{
    border: 2px solid white;
    padding: 10px;
    text-align: center;
    border-radius: 8px;
    font-size: 20px;
}

.contatos > div {
    margin-right: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
    margin-left: 40px;
    width: 20%;
    height: 530px;
    border: solid 4px white;
    float: left;
    text-align: center;
    padding-top: 5%;
}

.contatos > div p{
    font-size: 18px;
    color: rgb(248, 248, 248);
    margin-top: -20px;
    margin-bottom: 20px;
}


.contatos > div p.idade{
    margin-bottom: 5px;
}

.contatos > div  a.alterar, a.excluir{
    text-decoration: none;
}

.contatos > div a:hover {
    text-decoration: underline;
}


/*FOTOS DOS JOGADORES*/
.contatos > div img{
    width: 75%;
    margin-top: 5px;
}
    </style>



    <script>
        function conf_excluir(cod){
            conf = confirm("Deseja apagar o codigo "+cod);
            if(conf == true){
                window.location = "excluir.php?codigo="+cod;
            }
        }
    </script>
    
</head>
<body>
    <?php

    session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require('connect.php');
    $contatos = mysqli_query($con, "Select * from `td_cliente`");


    echo "<div class= titulo> <h1>BID Jogadores</h1>";
    echo "<fieldset>";
    echo "<legend><b>Formulário de Jogadores</b></legend>";
    echo "<div class = contatos>";

    while($contato = mysqli_fetch_array($contatos)){
        echo "<div>";
        echo "<p class = codigo>Código: $contato[codigo]</p>";
        echo "<p>Nome:  $contato[nome]</p>";
        echo "<p>Posição: $contato[posicao]</p>";
        echo "<p>Time: $contato[time]</p>";
        echo "<p class = idade >Idade: $contato[idade]</p>";
        echo "<img src = $contato[url]>";
        echo "<p><a class ='alterar' href =alterar.php?codigo=$contato[codigo]><p>Alterar</p></a></p>";
        echo "<p><a class ='excluir' href =javascript:conf_excluir($contato[codigo])>Excluir</a></p>";
        echo "</div>";
    }

    echo "</div>";
    echo "</fieldset>";
    ?>
</body>
</html>