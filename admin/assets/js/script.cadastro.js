$(document).ready(function () {
    $('#telefone').inputmask('(99)99999-9999')
});

const addUsuarios = () => {

    let dados = new FormData($('#form-cadastrar')[0])

    const result = fetch('/admin/backend/addUsuarios.php', {
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

            result.retorno == 'ok' ? $('#form-cadastrar')[0].reset() : ''
        })
}

