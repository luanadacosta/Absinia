const validaLogin = () =>{
    //captura todo o formulario e cria um formData
     let dados = new FormData($('#form-login')[0])
 
     //envio o recebimento de dados
     const result = fetch('backend/validaLogin.php', {
         method: 'POST',
         body: dados
     })
         .then((response) => response.json())
         .then((result) => {
             //si for errado senha ou email retorno é erro então aparece a msg
             if(result.retorno == 'erro'){
                 Swal.fire({
                     icon: 'error',
                     title: 'Atenção',
                     text: result.mensagem
                   })
             }else{
                 window.location = 'admin/'
             }
         //aqui é tratado o retorno ao front 
         
     })
 };
         
 
         
     
 