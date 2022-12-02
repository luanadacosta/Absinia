<?php
 
 include 'include/conexao.php';

 try{
 
    $email = $_POST['email']; 
    $telefone = str_replace($limpa,'',$_POST['telefone']);
    $confirmar = $_POST['confirmar']; 
    $senha = sha1($senha);

    //ATENÇAO
    //necessario implementar validacao de campos vazios
    //necessario implementar validacao de cpf e email ja cadastrados
    

    //inserção dos dados do usuario na tb_usuarios
    $sql = "INSERT INTO tb_cadastrar(email,telefone,senha,confirmar)
    VALUES('$email','$telefone,'$senha',$confirmar)";

    $comando = $con->prepare($sql);

    $comando->execute();


    //cria um array para ser convertido em JSON 
    $retorno = array("retorno"=>"ok","mensagem"=>"Cadastro realizado com sucesso!");


}catch(PDOException $erro){
    $retorno = array("retorno"=>"erro","mensagem"=>$erro->getMessage());
}

    $json = json_encode($retorno,JSON_UNESCAPED_UNICODE);

    echo $json;

    $con = null;

?>