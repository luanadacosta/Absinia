<?php


include'conexao.php';

try{
    
    $produto = $_POST['produto'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];
    $imagem = $_POST['imagem'];


    $sql = "INSERT INTO 
    tb_produto
    (
    `produto`,
    `categoria`,
    `valor`,
    `imagem`
    ) 
    VALUES 
    (
    '$produto','$categoria','$valor','$imagem'
    )
    ";

 
$comando = $con->prepare($sql);

$comando->execute();

$retorno = array("retorno"=>"ok","mensagem"=>"produto realizado com sucesso!");

$json = json_encode($retorno,JSON_UNESCAPED_UNICODE);

echo $json;

//fechar a conexao 
$con = null;


}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>