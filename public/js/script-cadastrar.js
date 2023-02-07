//add evento de onclick no elemento
const addUsuarios = () =>{


    //prevençao de envio padrao
    window.event.preventDefault()

    let nome = document.getElementById('nome').value

    let email = document.getElementById('email').value

    let senha = document.getElementById('senha').value

    let confirmar = document.getElementById('confirmar').value

    const result = fetch('../backend/cadastrar-login.php',{
        method: "POST",
        body: `nome=${nome}&email=${email}&senha=${senha}&confirmar=${confirmar}`,
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