// funcao que cadastra login

const cadastrarLogin = () =>{
    // captura dados do form
    
    let email = $('#email').val()
    let telefone = $('#telefone').val()
    let senha = $('#senha').val()
    let confirmar = $('#confirmar').val()
 
    const result = fetch('/cadastrar/login',{
        method:'POST',
        body: `telefone=${telefone}&email=${email}&senha=${senha}&confirmar=${confirmar}`,
        headers: {
            'content-type': 'application/x-www-form-urlencoded'
        }
    }).then((response)=>response.json())
    .then((result)=>{
        if(result.retorno == 'ok'){
            Swal.fire({
                'icon': 'success',
                "title": 'sucesso!',
                "text": result.mensagem
            })

            // limpa o formulario
            $('#form-login')[0].reset()

        }else{
            Swal.fire({
                'icon': 'error',
                "title": 'atenção',
                "text": result.mensagem
            })

        }
    })




}