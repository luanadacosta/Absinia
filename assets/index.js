app.post('/cadastrar/login',(req,res)=>{
    
    // res.send(req.body)
    // desestruturacao de dados

    // desestruturacao basica campo a campo
    // let nome = req.body.nome
   

    // desestruturacao de varios campos
    let {email,telefone,senha,confirmar} = req.body

    if(senha != confirmar){
        return res.json({"retorno":"error","mensagem":"senhas nao conferem"})
    }
    // monta o comando SQL que sera executado no banco de dados
    try{
        let sql = `INSERT INTO tb_cadastrar(nome,email,senha)
                   VALUES('${email}','${telefone}','${senha}')`
        // executa o comando SQL no banco de dados
        // executa um callback quando o comando é executado
        con.query(sql,(error,result)=>{
            if(error){
                return res.send(`Erro ao cadastrar: ${error}`)
            }
            // retorna a msg de sucesso
            res.send(`Cadastro realizado com sucesso!`)
        })
        
        
    } catch (error) {
        res.send(`Erro ao cadastrar: ${error}`)
        
    }
})





