<?php

include_once "backend/conexao.php";

try{
    $produto = $_POST['produto'];
    $categoria = sha1($_POST['categoria']);
    $valor = $_POST['valor'];
    $imagem = $_POST['imagem'];
  

    $sql = "SELECT produto FROM tb_produto WHERE produto ='$produto' AND BINARY categoria = '$categoria' AND ativo = 1";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

   
    if($dados != null){
        session_start();
        $_SESSION['produto'] = $produto;
        
        $retorno = array("retorno"=>"ok","mensagem"=>"Produto cadastrado com sucesso!"); 
    }else{
        $retorno = array("retorno"=>"erro","mensagem"=>"Dados inválidos!");
    }

}catch(PDOException $erro){
    $retorno = array("retorno"=>"erro","mensagem"=>$erro->getMessage());
}

$json = json_encode($retorno,JSON_UNESCAPED_UNICODE);
echo $json;
