<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de especialidades</title>
  <link rel="stylesheet" href="estilo_listaespecialidade.css">
</head>
<body>
  <div id="overlayMenu" class="overlayMenu"></div>

  <header>
    <div class="perfil" id="perfilBtn">
      <img src="../imagens/perfil.png" width="40px" alt="Perfil">
    </div>
    <p class="lista">Lista de especialidades</p>
  </header>

  <nav id="menuLateral" class="menu-lateral">
    <div class="menu-header">
      <img src="../imagens/perfilPNG.png" width="40px" alt="Usuário">
    </div>
    <ul>
     <li><a href="paginainicial_administrador.html">Página inicial</a></li>
      <li><a href="../medico/form_medico.php">Cadastro de médico</a></li>
      <li><a href="../especialidade/form_especialidade.html">Cadastro de especialidade</a></li>
      <li><a href="../usuario/listausuarios.php">Usuários</a></li>
      <li><a href="../paciente/lista_pacientesadm.php">Pacientes</a></li>
      <li><a href="../medico/lista_medicos.php">Médicos</a></li>
      <li><a href="../especialidade/lista_especialidade.php">Especialidades</a></li>
    </ul>
    <div class="sair">
      <img src="../imagens/sair.png" width="30px" alt="Sair">
      <a href="#" id="btnSair">Sair</a>
    </div>
  </nav>

  <div class="container">
    <table>
      <h2>Lista de especialidades</h2>
      <tr>
        <th>Código especialidade</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th colspan="2">Ações</th>
      </tr>

      <?php
      include('conexao.php');
      $sql = "Select * from especialidade";
      $res = mysqli_query($id,$sql);
      while ($linha = mysqli_fetch_array($res)) {
      ?>
      <tr>
        <td><?php echo $linha['id_especialidade'];?></td>
        <td><?php echo $linha['nome'];?></td>
        <td><?php echo $linha['descricao'];?></td>
        <td><a href='edita_especialidade.php?id_especialidade=<?php echo $linha['id_especialidade'];?>'><p style='color: #373638;'>Editar</p></a></td>
        <td><a href='deleta_especialidade.php?id_especialidade=<?php echo $linha['id_especialidade'];?>'><p style='color: #373638;'>Excluir</p></a></td>
      </tr>
      <?php } ?>
    </table>
  </div>

  <footer>
    <div class="footer-container">
      <img src="../imagens/apae.png" alt="Logo APAE" width="200" height="200">

      <div class="footer-contato">
        <h3>CONECTE-SE CONOSCO</h3>
        <p><img src="../imagens/instituicao.png" width="40px" class="icone-instituicao"> APAE – Associação dos Pais e Amigos dos Excepcionais de Criciúma – SC</p>
        <p><img src="../imagens/localizacao.png" width="30px" class="icone-localizacao"><a href="https://share.google/TCiTHP6GZTybb3aNS"> R. Imigrante de Luca, 600 – Pinheirinho, Criciúma – SC</a></p>
      </div>

      <div class="contato">
        <div class="contato-item">
          <img src="../imagens/telefone.png" width="50px">
          <a href="tel:+554834381457">(48) 3438-1457</a>
        </div>
        <div class="contato-item">
          <img src="../imagens/email.png">
          <a href="mailto:apaecri@matrix.com.br">apaecri@matrix.com.br</a>
        </div>
      </div>
    </div>
  </footer>
 <div id="popupSair" class="popup-sair">
    <div class="popup-conteudo">
        <p>Deseja sair da conta?</p>
        <div class="popup-botoes">
            <button id="cancelarPopup" onclick="Cancelar()">Cancelar</button>
            <button id="confirmarPopup" onclick="Sair()">Sair</button>
        </div>
    </div>
</div>
  <script src="script.js">
    
  </script>
</body>
</html>
