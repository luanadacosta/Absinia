// importa o modulo do express
const { response } = require('express');
const express = require('express')

// inicializa o express
const app = express()

// importa o modulo do usuario
const usuario = new require("./model/usuarios")

const produto = new require("./model/cadastrar")

const porta = 5000;

// define a pasta publica que armazena o conteudo estatico(CSS,JS,IMG)
app.use(express.static('views/public'))

//decodifica os parametros enviados para a rota
app.use(express.urlencoded({extended: true}))

//converte os valores para formato json
app.use(express.json())

// Cria a rota padrao /
app.get('/',(req,res)=>{
    res.sendFile(__dirname+'/views/index.html')
})

app.get('/login',(req,res)=>{
    res.sendFile(__dirname+'/views/login.html')
})


//rota para cadastrar de usuario
app.get('/cadastrar',(req,res)=>{
    //comando para inserir registros usando sequelize 
    res.sendFile(__dirname+'/views/cadastrar-usuarios.html')
})

app.post('/cadastrar/usuarios',(req,res)=>{
    let dados = req.body
    usuario.create(dados)
    .then(respBd=>{
        res.json({
            retorno:"ok",
            mesangem:"Cadastro Realizado com Sucesso!"
        })
    })
    .catch(resBd=>{
        res.json({
        retorno: "erro",
        mensagem: "Erro ao cadastrar"
    })
})

})


//funçao que lista todos os usuarios
app.get("/listar/usuarios",(req,res)=>{
  usuario.findAll()
  .then(respBd=>{
    //retorna os dados
    res.json(respBd)
  })  
  .catch(respBd=>{
    //aqui e tratado o erro
    res.json({
        restorno:"erro",
        mesangem: `erro ao listar ${respBd}`
    })
  })
})



//funçao que lista todos os usuarios por id
app.get("/listar/usuarios/:id",(req,res)=>{
    let id = req.params.id

    usuario.findOne({
        where:
        {id:id}
    })
    .then(respBd=>{
      //retorna os dados
      res.json(respBd)
    })  
    .catch(respBd=>{
      //aqui e tratado o erro
      res.json({
          restorno:"erro",
          mensagem: `erro ao listar ${respBd}`
      })
    })
  })



  app.get('/excluir/usuarios/:id',(req,res)=>{
    let id = req.params.id
    usuario.destroy({where:{id:id}})
    .then(respBd=>{
        res.json({
            retorno: "ok",
            mensagem: "Usuario removido com sucesso"
        })
    })
    .catch(respBd=>{
        res.json({
            retorno: "erro",
            mensagem: `Erro ao deletar ${respBd}`
        })
    })
  })


app.listen(porta,()=>{
    console.log(`Servidor rodando em: http://localhost:${porta}`)
})







