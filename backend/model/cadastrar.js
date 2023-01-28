const { DataTypes, Model } = require('sequelize');

const sequelize = require("/backend/conexao.php")

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
  confirmar: {
    type: DataTypes.STRING,
    allowNull: false
  },
}, {
  sequelize, 
  modelName: 'tb_cadastrar' 
});


// se nao existir a tabela, cria automatico
sequelize.sync()

module.exports = Usuario;