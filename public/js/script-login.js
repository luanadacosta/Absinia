
const validaLogin = () =>{

    let dados = new FormData($('#form-login')[0])

    const result = fetch('/login.html', {
        method: 'POST',
        body: dados
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
