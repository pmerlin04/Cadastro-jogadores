<?php
extract($_POST);
extract ($_FILES);
require('connect.php');

var_dump($foto);
if($foto['tmp_name'] != ""){
    echo "passe1";
    if($foto_anterior == ""){
        $foto_anterior = "imagens/".md5(time())."jpg";
        echo "passei2";
    }
    move_uploaded_file($foto['tmp_name'],$foto_anterior);
}
if(mysqli_query($con, "UPDATE `td_cliente` SET 
`codigo`='$codigo',`nome`='$nome',`posicao`= '$posicao',`time`='$time',
`idade`='$idade',`url`='$foto_anterior' WHERE `td_cliente`.`codigo` = '$codigo';")){
    $msg = "<div class = alertaGreen>Alterado com sucesso</div>";
}else{
    $msg="<div class = alertaRed>Erro ao alterar</div>";
}
@session_start();
$_SESSION['msg'] = $msg;
header("location:listar.php");
?>