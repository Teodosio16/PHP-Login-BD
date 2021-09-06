<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produtos</title>
<link rel="stylesheet" href="At.css">

<!--Tirar da pg e colocar aqui CSS-->
<style>
    * {
    padding    : 0;
    margin     : 0;
    box-sizing : border-box;
    font-family: sans-serif;
}

main {
    width     : 460px;
    height    : 500px;
    margin    : 0 auto;
    margin-top: 80px;
}
main p{
    display: block;
}

main a {
    text-decoration: none;
    color:black;
    font-weight: 600;
    font-size: 17.5px;
}
main a img{
    position: relative;
    top: 4.5px;
    right: 2.5px;
}
main a:hover{
    color:  #353535 ;
    text-decoration: underline;
}

legend {
    font-size  : 2.4rem;
    font-weight: 550;
}

fieldset {
    padding         : 10px;
    background-color: rgb(231, 230, 228);
  
}

label {
    margin-top: 16px;
}

input {
    margin-top: 2px;
}

form>.i {
    grid-column: 1;
    grid-row   : 1/5;
}

.i {
    display       : flex;
    flex-direction: column;
}

.i2 {
    display       : flex;
    flex-direction: column;
}

input[type="submit"] {
    margin-top      : 40px;
    grid-column     : 1/3;
    width           : 250px;
    justify-self    : center;
    border-radius   : 4px;
    border          : none;
    background-color: black;
    color           : white;
    height          : 30px;
    font-size       : 1.1rem;
}
input[type="submit"]:hover {
    background-color: #353535;
}
input {
    width: 180px;
    height: 21px;
}

form {
    display              : grid;
    grid-template-columns: 1fr 1fr;
}
.l a{
    font-size: 16px;
}
</style>

</head>

<body>

    <main>
        <fieldset>
            <legend>Cadastro De Produtos</legend>
            <form method="post">
                <div class="i">
                    <label for="d">Descrição De Produto</label>
                    <input type="text" name="descricao" id="n">
                    <label for="pu">Preço Unitário</label>
                    <input type="text" name="pu" id="pu">
                </div>

                <div class="i2">
                    <label for="pa">Preço Atacado</label>
                    <input type="text" name="pa" id="pa">
                    <label for="qm">Quantidade Mínima</label>
                    <input type="number" name="qm" id="qm">
                    <label for="qe">Quantidade De Estoque</label>
                    <input type="number" name="qe" id="qe">
                </div>
                <p><a href="./index.php">Sair <img src="https://img.icons8.com/material-outlined/24/000000/exit.png"/></a></p>
                <p class="l"><a href="./listar.php">Lista de Produtos<img src="https://img.icons8.com/material-two-tone/24/000000/placeholder-thumnail-spreadsheet.png"/></a></p>
                <input type="submit" name="submit" value="Salva">
            </form>
        </fieldset>
    </main>

    <?php

    include './include.php';
    if (isset($_POST['submit'])) {
        cadastra_Prouto();
    }

    ?>

</body>

</html>