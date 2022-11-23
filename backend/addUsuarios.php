<?php
 
 include 'include/conexao.php';

 try{
    $limpa = array('.','-','(',')',' ');

    $nome = $_POST['nome']; 
    $email = $_POST['email'];  
    $senha = sha1($senha);

    //ATENÇAO
    //necessario implementar validacao de campos vazios
    //necessario implementar validacao de cpf e email ja cadastrados
    

    //inserção dos dados do usuario na tb_usuarios
    $sql = "INSERT INTO tb_usuarios(nome,email,senhas) VALUES ('$nome','$email','$senha')";

    $comando = $con->prepare($sql);

    $comando->execute();

    //captura o id da tabela do comando executado a cima
    //necessario esse id para insert na tabela de endereço

    $id_usuario = $con->lastInsertId();

    $comando = $con->prepare($sql);
    $comando->execute();
  

    //cria um array para ser convertido em JSON 
    $retorno = array("retorno"=>"ok","mensagem"=>"Usuario logado com sucesso!");


}catch(PDOException $erro){
    $retorno = array("retorno"=>"erro","mensagem"=>$erro->getMessage());
}

    $json = json_encode($retorno,JSON_UNESCAPED_UNICODE);

    echo $json;

    $con = null;

?>