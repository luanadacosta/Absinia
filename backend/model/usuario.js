const { DataTypes, Model } = require('sequelize');

const sequelize = require("/backend/conexao.js")

class Usuario extends Model {}

Usuario.init({
  
  nome: {
    type: DataTypes.STRING,
    allowNull: false
  },
  email: {
    type: DataTypes.STRING,
    allowNull: false
  },
  senha: {
    type: DataTypes.STRING,
    allowNull: false
  },
}, {
 
  sequelize, 
  modelName: 'tb_usuarios' 
});


// se nao existir a tabela, cria automatico
sequelize.sync()

module.exports = Usuario;