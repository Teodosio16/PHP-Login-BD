<?php

function cadastra_Prouto(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$descricao=$_POST['descricao'];
$pu =$_POST['pu'];
$pa=$_POST['pa'];
$qm=$_POST['qm'];
$qe=$_POST['qe'];
$sql = "INSERT INTO produto (descricao, preco_unitario, preco_atacado, quantidade_minima, quantidade_estoque)
 VALUES ('$descricao', '$pu', '$pa', '$qm', '$qe');";
  
  if (mysqli_query($conn, $sql)) {
    echo "Salvo Com Sucesso ";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  
  }
  mysqli_close($conn);
}


function cadastra_Usuario(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $usuario=$_POST['usuario'];
    $senha =$_POST['senha'];
   

    $sql = "INSERT INTO usuario (usuario, senha)
     VALUES ('$usuario', '$senha');";
      
      if (mysqli_query($conn, $sql)) {
        echo "Salvo Com Sucesso! ";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      
      }
      mysqli_close($conn);
    }

 function lista(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "myDB";
  // Create connection 
  $conn = mysqli_connect($servername, $username, $password, $dbname);
 
$resultado = mysqli_query($conn,"SELECT * FROM produto");

echo '<table border=1><tr>
      <td>Codigo</td>
      <td>Descrição Do Produto</td>
      <td>Preço Unitário</td>
      <td>Preço Atacado</td>
      </tr>';
      
if(mysqli_num_rows($resultado) > 0){
    while($reg = mysqli_fetch_assoc($resultado))
    {
       echo "<tr>";
       echo "<td>" . $reg['codigo'] . "</td>";
       echo "<td>" . $reg['descricao'] . "</td>";
       echo "<td>" . $reg['preco_unitario'] . "</td>";
       echo "<td>" . $reg['preco_atacado'] . "</td>";
       echo "</tr>";
    }
    echo '</table>';
}else{
echo 'Sem dados cadastrais';
}


mysqli_close($conn);
}

?>