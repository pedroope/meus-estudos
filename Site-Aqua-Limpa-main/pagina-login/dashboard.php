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
        <th>data de nascimento</th>
        <th>nome do usuario</th>
        <th>Email</th>


      </tr>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
        
        <td><?php echo $row['drnasc']; ?></td>
        <td><?php echo $row['nusuario']; ?></td>
          <td><?php echo $row['email']; ?></td>
        </tr>
      <?php } ?>
    </table>
  </div>

  
<!-- 

Painel


<h1>Bem-vindo!</h1>
  <p id="user">Vamos trabalhar, pois ninguém nasceu rico!.</p>
  <button class="btn-dashboard" onclick="Dashboard()">Ir para o Dashboard</button>


  <script>
     function Dashboard() {
     window.location.href = "dashboard.php";


    }
  </script> -->
