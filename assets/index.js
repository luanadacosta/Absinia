app.post('/cadastrar/login',(req,res)=>{
   
    let {email,telefone,senha,confirmar} = req.body

    if(senha != confirmar){
        return res.json({"retorno":"error","mensagem":"senhas não conferem"})
    }
    
    try{
        let sql = `INSERT INTO tb_cadastrar(email,telefone,senha)
                   VALUES('${email}','${telefone}','${senha}')`
        
        con.query(sql,(error,result)=>{
            if(error){
                return res.send(`Erro ao cadastrar: ${error}`)
            }
           
            res.send(`Cadastro realizado com sucesso!`)
        })
        
        
    } catch (error) {
        res.send(`Erro ao cadastrar: ${error}`)
        
    }
})





