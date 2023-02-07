//add evento de onclick no elemento
const validaProduto = () =>{


    //prevençao de envio padrao
    window.event.preventDefault()

    let produto = document.getElementById('produto').value

    let categoria = document.getElementById('categoria').value

    let valor = document.getElementById('valor').value

    let imagem = document.getElementById('imagem').value

    const result = fetch('../backend/cadastrar-produto.php',{
        method: "POST",
        body: `produto=${produto}&categoria=${categoria}&valor=${valor}&imagem=${imagem}`,
        headers:{'Content-type':'application/x-www-form-urlencoded'
        }
    })
    .then(response=>response.json())
    .then(result=>{
        if(result.retorno == 'ok'){
        Swal.fire({
            icon: "success",
            title: "sucesso",
            text: result.mensagem
    })
    //resetar formulario
    document.getElementById('form-usuarios').reset()
    }else{
        Swal.fire({
            icon: "error",
            title: "atenção",
            text: result.mensagem
        })
        }
    })

}