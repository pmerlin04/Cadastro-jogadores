 <?php
//ESSA PARTE VERIFICA SE NÃO EXISTE UM BD COM ESSAS CARACTERISTICAS
if(!$con = mysqli_connect('localhost','root', '','bd_cadastro')){
    echo "Erro ao se conectar com o banco de dados"; 
}


//ESSE COMANDO É PARA ACESSAR UMA QUERY NO PHPMYADMIN
mysqli_query($con, "SET NAMES utf8");
?>