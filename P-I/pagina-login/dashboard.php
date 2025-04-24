<?php

include("conexao.php");


// fazendo a busca no banco
$sql = "SELECT * FROM usuario";

$result = mysqli_query($conexao, $sql);
?>


<div class="container">
    <h2>Lista de Usuários</h2>
    <table>
      <tr>
        <th>nome do usuario</th>
        <th>data de nascimento</th>
        <th>Email</th>


      </tr>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
        
        <td><?php echo $row['usuario']; ?></td>
        <td><?php echo $row['dtnasc']; ?></td>
          <td><?php echo $row['email']; ?></td>
        </tr>
      <?php } ?>
    </table>
  </div>

  

