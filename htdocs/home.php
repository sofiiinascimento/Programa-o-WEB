<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: aliceblue;
            text-align: center;
            color: black;
            padding: 150px;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid aliceblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: aliceblue;
            color: black;
        }
    </style>
</head>
<body>
    <h1>Seja bem-vindo(a)</h1>
    <p>Se for a sua primeira vez aqui, clique em "Cadastrar-se".</p>
    <p>Porém se você já esteve aqui antes, clique em "Login".</p>
    <div class="box">
        <a href="telaLogin.php">Login</a>
        <a href="telaFormulario.php">Cadastrar-se</a>
    </div>
</body>
</html>