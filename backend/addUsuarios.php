<?php
 
 include 'include/conexao.php';

 try{
    $email = $_POST['email'];  
    $senha = sha1($senha);

   
    $sql = "INSERT INTO tb_usuarios(email,senha) VALUES ('$email','$senha')";

    $comando = $con->prepare($sql);

    $comando->execute();

    $comando = $con->prepare($sql);
    $comando->execute();
  
    $retorno = array("retorno"=>"ok","mensagem"=>"Usuario logado com sucesso!");


}catch(PDOException $erro){
    $retorno = array("retorno"=>"erro","mensagem"=>$erro->getMessage());
}

    $json = json_encode($retorno,JSON_UNESCAPED_UNICODE);

    echo $json;

    $con = null;

?>