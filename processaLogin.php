<?php 
include 'connection.php';

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

if($conn->connection_error){
    die("Connection failed" . $conn->connection_error);
}else{
    
    $sql = "SELECT cpf, senha FROM usuario WHERE cpf = $cpf, senha = $senha";
    $resultado = $conn->query($sql);
    if($resultado->num_rows > 0){
        echo "<script>alert('Usuario autenticado com sucesso');window.location.href=view/dashboard.html</script>"
    }else{
        echo "<script>alert('Acesso negado');window.location.href=../index.html</script>"
    }
?>