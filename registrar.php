<?php 

$servername='localhost';//nome do servidor
$username='root'; // nome do usuario padrao do servidor
$password=''; // senha do usuario padrao do servidor
$bd_name='usuarios'; // nome do banco de dados

$conn = new mysqli($servername,$username,$password,$bd_name); // faz a conexão com o banco de dados usando as variaveis que declarei a cima

if($conn->connect_error){
    die('Falha na conexão' . $conn->connect_error); // aqui da erro caso nao seja possivel se conectar com o banco de dados
}


//minhas variaveis do formulario para registrar
$name = $_POST['name'];
$mail = $_POST['mail'];
$senha = $_POST['senha'];
$enviar = $_POST['enviar'];


if(isset($enviar)){
 $sql = "INSERT INTO usuarios (nome, email, senha) VALUES('$name','$mail','$senha')";
}

if ($conn->query($sql) === TRUE) {
    echo "Novo usuário criado com sucesso!";
} else {
    echo "Erro ao criar usuário: " . $conn->error;
}

?>