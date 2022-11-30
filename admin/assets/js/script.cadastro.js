$(document).ready(function () {
    $('#cpf').inputmask('999.999.999-99');
    $('#telefone').inputmask('(99)99999-9999')
    $('#cep').inputmask('99999-999')

    //executa a funcao listaTIpo
    listaTipo();

});

const consultaCep = () => {
    let cep = $("#cep").val();
    //replace para tirar o _ e - da mascara
    cep = cep.replaceAll("_", "").replaceAll("-", "")

    //verifica si o ceo foi preenchido com todos os numeros, cep com menos de 9 digitos da erro
    if (cep.length < 8) {
        Swal.fire({
            icon: 'error',
            title: 'Atenção',
            text: 'Cep invalidos'
        })
        $('#numero').focus()
    }

    //realiza requisicao para API via Cep
    const result = fetch(`https://viacep.com.br/ws/${cep}/json`)
        .then((response) => response.json())
        .then((result) => {
            //
            if (result.erro == true) {
                Swal.fire({
                    icon: 'error',
                    title: 'Atenção',
                    text: 'Cep não encontrado'
                })
            } else {

                //retorno da requisição com o cep preenche o nome da rua bairro cidade e estado
                $('#rua').val(result.logradouro)
                $('#bairro').val(result.bairro)
                $('#cidade').val(result.localidade)
                $('#estado').val(result.uf)

                //coloca o focus do usuario no campo numero
                $('#numero').focus()

            }
        })

}

const listaTipo = () => {
    //funcao que lista os tipos para o cadastro 
    //dados da tabela tb_tipos
    const result = fetch('../backend/listaTipo.php')
        .then((response) => response.json())
        .then((result) => {
            //aqui sera o retorno dos dados do backend
            //monta no select tipo os dados da tabela
            result.map((tipo) => {
                $('#tipo').append(
                    `
                <option value="${tipo.id}">${tipo.tipo}</option>
                `
                )
            })
        })
}