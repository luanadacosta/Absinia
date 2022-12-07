

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../admin/assets/css/style.css">
</head>

<body>

    <div class="corpo1">
        <div class="container">
            <h2>Entrar</h2>

            <form action="" method="POST" id="form-login">
                <div>
                    <label class="cd" for="email">Email</label>
                    <input type="email" class="input-login" name="email" id="email">
                </div>

                <div>
                    <label class="cd" for="senha">Senha</label>
                    <input type="password" class="input-login" name="senha" id="senha">
                </div>

                <div class="center">
                    <button class="btn-login" type="button">Login</button>
                </div>
                <br>

                <div class="cds">
                    <h5>Não tem cadastro?</h5>
                    <button class="btn-criar" type="button" onclick="validaLogin()">Criar conta</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>