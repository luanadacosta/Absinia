
const validaLogin = () => {

    let dados = new FormData($('#form-login')[0])

    const result = fetch('../backend/validaLogin.php', {
        method: 'POST',
        body: dados
    })
        .then((response) => response.json())
        .then((result) => {
            //aqui tratamos o retorno do backend

            Swal.fire({
                icon: result.retorno == 'ok' ? 'success' : 'error',
                title: result.retorno == 'ok' ? 'Sucesso!' : 'Atenção',
                text: result.mensagem,
            });

            result.retorno == 'ok' ? $('#form-login')[0].reset() : ''
        })
}

