const validarLogin = ()=>{
    let email = $('#email').val()
    let senha = $('#senha').val()

    if(email == ''){
        Swall.fire({
            "icon":"error",
            "title":"Atenção",
            "text":"Preencha o campo email"
        })
        return
    }
    if(senha == ''){
        Swall.fire({
            "icon":"error",
            "title":"Atenção",
            "text":"Preencha o campo senha"
        })
    }

}

const result = fetch('/valida/login',{
    method:'POST',
    body: `email=${email}&senha=${senha}`,
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




