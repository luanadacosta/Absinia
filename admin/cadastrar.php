<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../admin/assets/css/style.css">
</head>

<body class="corpo">

    <div class="corpo">
        <div class="container">
            <h2>Cadastrar</h2>

            <form action="" method="POST" id="form-cadastrar">
                <div>
                    <label class="cd" for="email">Email</label>
                    <input type="email" class="input-cadastro" name="email" id="email">
                </div>

                <div>
                    <label class="cd" for="telefone">Telefone</label>
                    <input type="telefone" class="input-cadastro" name="telefone" id="telefone">
                </div>

                <div>
                    <label class="cd" for="senha">Senha</label>
                    <input type="password" class="input-cadastro" name="senha" id="senha">
                </div>

                <div>
                    <label class="cd" for="confirmar">Confirmar Senha</label>
                    <input type="confirmar" class="input-cadastro" name="confirmar" id="confirmar">
                </div>

                <div class="center">
                    <button class="btn-cadastrar" type="button">Cadastrar</button>
                </div>
            </form>


        </div>
    </div>
</body>

</html>