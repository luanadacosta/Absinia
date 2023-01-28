<?php
 
 include 'backend/conexao.php';

 try{
 
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $senha = sha1($senha);
    $confirmar = $_POST['confirmar']; 


    $sql = "INSERT INTO tb_cadastrar(nome,email,senha,confirmar)
    VALUES('$nome','$email','$senha',$confirmar)";

    $comando = $con->prepare($sql);

    $comando->execute();

    $retorno = array("retorno"=>"ok","mensagem"=>"Cadastro realizado com sucesso!");


}catch(PDOException $erro){
    $retorno = array("retorno"=>"erro","mensagem"=>$erro->getMessage());
}

    $json = json_encode($retorno,JSON_UNESCAPED_UNICODE);

    echo $json;

    $con = null;

?>