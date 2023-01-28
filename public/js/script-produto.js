
$( document ).ready(function() {
    listarProduto()
 });
 
 const validaLogin = () => {
     
     let dados = new FormData($('#form-login')[0])
 
 
   
     const result = fetch('backend/valida_login.php', {
         method: 'POST',
         body: dados
     })
         //si a resposta é em formato json pega o resultado e exibe na tela
         .then((response) => response.json())
         .then((result) => {
             //Aqui é tratado o retorno ao front
 
             if (result.retorno=='erro'){
                 Swal.fire({
                     title: 'atenção',
                     text: result.mensagem,
                     icon: 'error',
                 })
             }
 
             else{
                 window.location='admin/gerenciar.php'
             }
         })
     
 }
 
 const addProduto = () => {
     
     let dados = new FormData($('#form-produto')[0])
 
     const result = fetch('../backend/addProduto.php', {
         method: 'POST',
         body: dados
     })
         //si a resposta é em formato json pega o resultado e exibe na tela
         .then((response) => response.json())
         .then((result) => {
             //Aqui é tratado o retorno ao front
 
             if (result.retorno=='erro'){
                 Swal.fire({
                     title: 'atenção',
                     text: result.mensagem,
                     icon: 'error',
                 })
             }
 
             else{
                 Swal.fire({
                     title: 'atenção',
                     text: result.mensagem,
                     icon: 'success',
                 })
             }
         })
     
 }
 
 
 
 const listarProduto = () => {
     let dados = new FormData($('#form-listagem')[0])
 
     const result = fetch('../backend/listaProduto.php', {
         method: 'POST',
         body: ''
     })
         //si a resposta é em formato json pega o resultado e exibe na tela
         .then((response) => response.json())
         .then((result) => {
             //let datahora = moment().format('DD/MM/YY HH:mm')
            //aqui é tratado o retorno ao front
            //$('#horario-atualizado').html(datahora)
             //destroi a tabela que foi iniciada
             $("#tabela").dataTable().fnDestroy();
 
             //limpa os dados da tabela
             $('#tabela-dados').html('')
            
             //Função que ira  montar as linhas da tabela o map é um tipo de laço(for)
             result.map(user => {
                 $('#tabela-dados').append(`
                     <tr>
                         <td>${user.produto}</td>
                         <td>${user.fabricante}</td>
                         <td>${user.data_cadastro}</td>
                         <td>${user.quantidade}</td>
                         <td>${user.categoria}</td>
                         <td>${user.codigo}</td>
                     </tr>
                 `)
             })
     })
 }