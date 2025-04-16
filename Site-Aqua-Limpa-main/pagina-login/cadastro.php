<?php
include("conexao.php");

$nomeusuario=$_POST['nomeusuario'] ;
$datanascimento= $_POST['datanascimento'] ;
$email= $_POST['email'];
$senha= $_POST['senha'] ;




$sql = "INSERT INTO usuario (nomeusuario,datanascimento, email, senha,  )
values ('$nomeusuario','$datanascimento','$email' , '$senha',)";


if(mysqli_query($conexao , $sql)){


header('location:dasboard.php');


}else{
    echo "Error". mysqli_connect_error($conexao);
                   
}


mysqli_close($conexao);


     






?>
