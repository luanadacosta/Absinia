<?php
 
 include 'include/conexao.php';

 try{
 
    $email = $_POST['email']; 
    $telefone = str_replace($limpa,'',$_POST['telefone']);
    $senha = sha1($senha);
    $confirmar = $_POST['confirmar']; 


    $sql = "INSERT INTO tb_cadastrar(email,telefone,senha,confirmar)
    VALUES('$email','$telefone,'$senha',$confirmar)";

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