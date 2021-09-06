<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teodosio 2</title>
   
    <style>
   h1 {
    margin: 0;
    text-align: center;
    border-bottom: 1px solid #999;
    box-shadow: 0 0 3px 1px blueviolet ;
    margin-bottom: 30px;
    padding: 10px;
   }
   table {
    width: 60%;
    height: 200px;
    border: 1px solid #555;
    background: #c7c7c7; 
    margin: 15px auto;
   }
   
   th {
    border: 1px solid rgb(255, 253, 253);
    background: rgb(156, 047, 147);
   }
   
   td {
    border: 1px solid rgb(83, 112, 109);
    text-align: center;
   }
 p{
     text-align: center;
    display: block;
}
 a {
    text-decoration: none;
    color:black;
    font-weight: 600;
    font-size: 17.5px;
}
a:hover{
    color:  #353535 ;
    text-decoration: underline;
}
   
    </style>
</head>

<body>
<h1>Lista de Podutos</h1>

    <?php
     include './include.php';
     lista();
    ?>
<p><a href="./cadastra.php">Voltar</a></p>

</body>

</html>