<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../admin/assets/css/style.css">
</head>

<body>

    <div class="corpo">
        <div class="container">
            <h2>Faça seu Cadastro</h2>

            <form action="" method="POST" id="form-login">
                <div class="center">
                    <img src="assets/img/logo.png" alt="" width="120px">
                </div>


                <div>
                    <label class="cd" for="email">Email</label>
                    <input type="email" class="input-login" name="email" id="email">
                </div>

                <div>
                    <label class="cd" for="complemento">Complemento</label>
                    <input type="text" class="input-login" name="complemento" id="complemento">
                </div>

                <div>
                    <label class="cd" for="telefone">Telefone</label>
                    <input type="text" class="input-login" name="telefone" id="telefone">
                </div>

                <div>
                    <label class="cd" for="cidade">Cidade</label>
                    <input type="text" class="input-login" name="cidade" id="cidade">
                </div> 
                
                <div>
                    <label class="cd" for="cpf">Cpf</label>
                    <input type="text" class="input-login" name="cpf" id="cpf">
                </div>

                <div>
                    <label class="cd" for="bairro">Bairro</label>
                    <input type="text" class="input-login" name="bairro" id="bairro">
                </div>

                <div>
                    <label class="cd" for="rua">Rua</label>
                    <input type="text" class="input-login" name="rua" id="rua">
                </div>

                <div>
                    <label class="cd" for="numero">Numero</label>
                    <input type="text" class="input-login" name="numero" id="numero">
                </div>

                <div>
                    <label class="cd" for="data_nascimento">Data Nascimento</label>
                    <input type="date" class="input-login" name="data_nascimento" id="data_nascimento">
                </div>

                <div>
                    <label class="cd" for="estado">Estado</label>
                    <select name="estado" class="input-login" id="estado">
                        <option value="" disabled selected>Aguarde...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                    </select>
                </div>

                <div class="center">
                    <button class="btn-cadastrar" type="button" onclick="addUsuarios()">Cadastrar</button>
                </div>


            </form>


        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https:kit.fontwesome.com/d1a9a58100.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/script-login.js"></script>
</body>

</html>