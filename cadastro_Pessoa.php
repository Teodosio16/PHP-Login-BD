<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        main {
            display: flex;
            height: 100vh;
            width: 100vw;
            background-color: lightblue;
        }

        .login {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto;

        }

        /* #2CBF6C cor mais fraca*/
        .login div {
            margin: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            margin: 8px;
            border-radius: 5px;
            border: none;
        }

        input[type="text"],
        input[type="password"] {
            height: 40px;
            width: 390px;

        }

           input[type="submit"] {
            margin-top: 35px;
            font-weight: 900;
            border-radius: 14px;
            height: 50px;
            width: 50%;
            align-self: center;
            background-color: #000000;
            color: white;
            box-shadow: lightcyan 1px 2px 3px;
        }

        input[type="submit"]:hover {
            background-color: #353535;
        }

        .login>.text {
            margin-bottom: 40px;
        }
          .login>.home a {
            text-decoration: none;
            color: black;
            font-weight: 600;
        }

        .login>.home a:hover {
            color: #353535;
            text-decoration: underline;
        }

    </style>

</head>

<body>
    <main>

        <div class="login">
            <div class="text">
                <h1>Cadastre-se</h1>
            </div>
            <!--form-->
            <div class="form">

                <form method="post">
                    Seu Nome: <input type="text" name="usuario">
                    Sua Senha: <input type="password" name="senha" id="">
                    <input type="submit" name="salva" value="Salva">
                </form>
            </div>

            <div class="home">
            <a href="./index.php" target="_top">Inicio</a>
            </div>
   
            <div class="php">
                

            <?php
                if (isset($_POST['salva'])) {
                    $_SESSION['usuario'] = $_POST['usuario'];
                    $_SESSION['senha'] = $_POST['senha'];
                    include('./include.php');
                    cadastra_Usuario();
                }
                ?>

            </div>
         
        </div><!--Fim do Login-->

    </main>
</body>

</html>