<?php


include'conexao.php';

try{
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar = $_POST['confirmar'];


    $sql = "INSERT INTO 
    tb_cadastrar
    (
    `nome`,
    `email`,
    `senha`,
    `confirmar`
    ) 
    VALUES 
    (
    '$nome','$email','$senha','$confirmar'
    )
    ";

 
$comando = $con->prepare($sql);


$comando->execute();


header('Location:../admin/cadastrar.html.');

//fechar a conexao 
$con = null;


}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>