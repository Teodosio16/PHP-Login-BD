<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
            background-color: #2CBF6C;
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
            outline-color: rgb(15, 228, 15);
            height: 40px;
            width: 390px;
          
        }

        input[type="submit"] {
            margin-top: 20px;
            font-weight: 900;
            border-radius: 50px;
            height: 50px;
            width: 50%;
            align-self: center;
            background-color: #000000;
            color: white;
            box-shadow: #1b7542 1px 3px 4px;
        }

        input[type="submit"]:hover {
            background-color: #353535;
        }

        .svg {
            display: flex;
        }

        .svg-img {
            padding-left: 10px;
        }

        .svg-img div:first-child {
            padding-left: 0px;
        }

        .img {
            max-width: 500px;
            background: white;
        }

        .login>.cadastre-se a {
            text-decoration: none;
            color: black;
            font-weight: 600;
        }

        .login>.cadastre-se a:hover {
            color: #353535;
            text-decoration: underline;
        }
    </style>



</head>

<body>
    <main>

        <div class="login">
            <div class="text">
                <h1> Login Usuário</h1>
            </div>

            <div class="svg">
                <div class="svg-img">
                    <a href=""><img src="https://img.icons8.com/material-outlined/24/000000/instagram-new--v2.png" /></a>
                </div>
                <div class="svg-img">
                    <a href=""><img src="https://img.icons8.com/material-rounded/24/000000/facebook.png" /></a>
                </div>
                <div class="svg-img">
                    <a href=""><img src="https://img.icons8.com/material-outlined/24/000000/linkedin--v1.png" /></a>
                </div>
            </div>

            <!--form-->
            <div class="form">
                <form method="post">
                    Nome: <input type="text" name="usuario">
                    Senha: <input type="password" name="senha" id="">
                    <input type="submit" name="entrar" value="Entrar">
                </form>
            </div>
            <!-- DIV PHP-->
            <div class="cadastre-se">
                <a href="./cadastro_Pessoa.php" target=>Cadastre-se</a>
            </div>

            <div class="php">


                <?php

                if (isset($_POST['entrar'])) {
    
                    if ($_POST['usuario'] == $_SESSION['usuario'] && $_POST['senha'] == $_SESSION['senha']) {
                         header('Location: ./cadastra.php');//<a> do php
                         die();
                    }else{
                        echo 'Crie uma conta.';
                    }
                }


                ?>


            </div>

        </div>
        <!--FIM De .Login-->

</body>

</html>