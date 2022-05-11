<?php
extract($_POST);
extract($_FILES);
require('connect.php');//ESSE COMANDO INCLUI TODAS AS INFORMAÇOES DA PAG Q ESTA EM PARENTESES

 $url = "imagens/".md5(time().$foto['name']).".jpg";
 
if(move_uploaded_file($foto['tmp_name'],$url)){
    if(mysqli_query($con, "INSERT INTO `td_cliente` 
    (`codigo`, `nome`, `posicao`, `time`, `idade`, `url`) 
    VALUES (NULL, '$nome', '$posicao', '$time', '$idade', '$url');")){
   
        $msg = "<div class = alertaGreen>Incluído com sucesso!!!</div>";
    }else{
        $msg ="<div class = alertaRed>Erro ao Incluir!!!</div>";
    }
}



 @session_start();
 $_SESSION['msg'] = $msg;
 header("location:cad_form.php");
?>