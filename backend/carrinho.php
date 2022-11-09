<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style-login.css">
</head>

<body>

    <div class="corpo">
        <div class="img-fundo">
            
        </div>
        <div class="sombra">

        </div>
        <div class="container">
            
            <form action="" method="POST" id="form-login">
                <div class="center">
                    <img src="assets/img/logo.png"  alt="" width="120px">
                </div>
                
                <div>
                    <label for="email">
                        Email
                    </label>
                    <input type="email" class="input-login" name="email" id="email" placeholder="Digite seu email...">
                </div>
                <div>
                    <label for="senha">
                        Senha
                    </label>
                    <input type="password" class="input-login" name="senha" id="senha" placeholder="Digite sua senha...">
                </div>

                <div class="center">
                    <button type="button" class="btn-login" onclick="validaLogin()">Login</button>
                </div>
    
            </form>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.1.js"integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https:kit.fontwesome.com/d1a9a58100.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/script-login.js"></script>
</body>

</html>