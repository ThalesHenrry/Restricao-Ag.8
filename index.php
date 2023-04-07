<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-image: url(img/fundo.png);
            }
    </style>
    <title></title>
</head>

<body>
    <div class="w3-container w3-round-xxlarge w3-display-middle w3-third " style="">
        <form class="w3-container " action="loginAction.php" method="post">
            <img src="img/logo.png" alt="Logo" height="150" width="180" style="position:relative;left:800px;top:-150px;">
            <div class="w3-section">
                <label style="color:white; font-weight: bold; ">USUÁRIO</label>
                <input class="w3-input w3-border w3-marginbottom" type="text" placeholder="Digite o nome" name="txtNome" required>
                <br>
                <label style="color:white; font-weight: bold;">SENHA</label>
                <input class="w3-input w3-border" type="password" placeholder="Digite a Senha" name="txtSenha" required>
                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit"><b>Entrar</b></button>
            </div>
        </form>
        <br>
    </div>
</body>

</html>