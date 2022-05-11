<?php
    require("connect.php");
    $codigo = $_GET['codigo'];
    if(mysqli_query($con,  "DELETE FROM `td_cliente` WHERE `codigo` = '$codigo'")){
        $msg = "cadastro excluido";
    }else{
        $msg = "Erro ao excluir";
    }


    @session_start();
    $_SESSION['msg']= $msg;
    header("location:listar.php");
    
?>