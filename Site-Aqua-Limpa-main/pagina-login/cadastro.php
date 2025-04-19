<?php
include("conexao.php");

$nusuario=$_POST['nomeusuario'] ;
$dtnasc= $_POST['datanascimento'] ;
$email= $_POST['email'];
$senha= $_POST['senha'] ;




$sql = "INSERT INTO usuario (nusuario,dtnasc,email,senha  )
values ('$nusuario','$dtnasc','$email' , '$senha',)";


if(mysqli_query($conexao , $sql)){


header('location:dasboard.php');


}else{
    echo "Error". mysqli_connect_error($conexao);
                   
}


mysqli_close($conexao);


     






?>
