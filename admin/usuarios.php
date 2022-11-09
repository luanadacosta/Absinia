<?php
//iniciando a sessao 
//session_start();
//exibindo uma var de sessao(global)

//se a var sessao email nao estiver setada o usuario sera redirecionado para o login
//somente é permitido que fez login corretamente podera acessar esta pagina
//if (!isset($_SESSION['email'])) {
//   header('Location: ../');}
?>

        <?php
            include '../backend/carrinho.php'
        ?>
        <!--final 
        aside-->

        <!--aqui sera o conteudo da pagina-->
        <main class="admin-corpo">


            <div class="div-professores">
                <div class="tabs">
                    <div id="aba-cadastro" class="titulo-principal" tab-ativo" onclick="abaCadastro()">
                        <p class="titulo-texto">Cadastro de usuarios</p>
                    </div>
                    <div id="aba-listagem" class="titulo-principal" onclick="abaListagem()">
                        <p class="titulo-texto">Listagem</p>
                    </div>
                </div>


                <form id="form-professores">
                    <div class="grid-professores">
                        <div>
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome">
                        </div>

                        <div>
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email">
                        </div>

                        <div>
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone">
                        </div>

                        <div>
                            <label for="cpf">Cpf</label>
                            <input type="text" name="cpf" id="cpf">
                        </div>

                        <div>
                            <label for="data_nascimento">Data Nascimento</label>
                            <input type="date" name="data_nascimento" id="data_nascimento">
                        </div>

                        <div>
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo">
                                <option value="" disabled selected>Selecione...</option>
                            </select>
                        </div>

                        <div>
                            <label for="cep">Cep</label>
                            <div class="div-cep">
                                <input class="input-cep" type="text" name="cep" id="cep">
                                <button class="btn-cep" type="button" onclick="consultaCep()" class="btn-cep"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>

                        <div>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" id="rua">
                        </div>

                        <div>
                            <label for="bairro">Bairro</label>
                            <!--readonly nao deixa mudar o nome do bairro-->
                            <input type="text" name="bairro" id="bairro" readonly>
                        </div>

                        <div>
                            <label for="numero">Numero</label>
                            <input type="text" name="numero" id="numero">
                        </div>

                        <div>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade">
                        </div>


                        <div>
                            <label for="estado">Estado</label>
                            <!--<input type="text" name="estado" id="estado">-->
                            <select name="estado" id="estado">
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

                        <div>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" id="complemento">
                        </div>


                        <button class="btn-cadastrar" type="button" onclick="addUsuarios()">Cadastrar</button>
                    </div>
                </form>

                <div id="div-listagem">
                    <h4>Listagem de usuários</h4>

                    <form id="form-listagem">
                        <div>
                            <label for="pesquisar">Pesquisar usuários</label>
                            <div class="div-cep">
                                <input class="input-cep" type="text" name="pesquisar" id="pesquisar">
                                <button class="btn-cep" type="button" onclick="pesquisarUsuario()">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div id="resultado-listagem">

                    </div>
                </div>
            </div>
        </main>
    
    <?php
        include 'include/footer.php'
    ?>

