<?php

$servername='localhost';//nome do servidor
$username='root'; // nome do usuario padrao do servidor
$password=''; // senha do usuario padrao do servidor
$bd_name='usuarios'; // nome do banco de dados

$conn = new mysqli($servername,$username,$password,$bd_name); // faz a conexão com o banco de dados usando as variaveis que declarei a cima

if($conn->connect_error){
    die('Falha na conexão' . $conn->connect_error); // aqui da erro caso nao seja possivel se conectar com o banco de dados
}

//minhas variaveis do formulario para login
$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];
$submit = $_POST['submit'];


if (isset($submit)) {

// aqui eu comparo as minhas variaveis com o que está no banco de dados...
$sql= mysqli_query($conn, "SELECT * FROM usuarios WHERE nome = '$nome' AND email = '$email' AND senha = '$password' " ); 

    if (mysqli_num_rows($sql) > 0) {
        header("location: home.php");
        
    }else{
        
        header("Location: index.php?login=erro");
        die("Error.");
    }
        
}


?>