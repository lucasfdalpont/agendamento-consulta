<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Agendamentos</title>
  <link rel="stylesheet" href="estilo_lista.css">
</head>
<body>
  <div id="overlayMenu" class="overlayMenu"></div>


  <header>
    <div class="perfil" id="perfilBtn">
      <img src="../imagens/perfil.png" width="40px" alt="Perfil">
    </div>
    <p class="lista">Lista de agendamentos</p>
  </header>


  <nav id="menuLateral" class="menu-lateral">
    <div class="menu-header">
      <img src="../imagens/perfilPNG.png" width="40px" alt="Perfil PNG">
    </div>
    <ul>
       <li><a href="../medico/pagina_inicial_medico.html">Página inicial</a></li>
             <li><a href="../consulta/form_consulta.php">Cadastro de consulta</a></li>
            <li><a href="../agendamento/lista_agendamentousuario.php">Agendamentos</a></li>
            <li><a href="../paciente/lista_pacienteusuario.php">Pacientes</a></li>
            <li><a href="../consulta/lista_consultausuario.php">Consultas</a></li>
    </ul>
    <div class="sair">
      <img src="../imagens/sair.png" width="30px" alt="Sair">
      <a href="#" id="btnSair">Sair</a>
    </div>
  </nav>


  <main>
    <div class="container">
      <h2>Lista de agendamentos</h2>
      <table>
        <thead>
          <tr>
            <th>Código agendamento</th>
            <th>Código paciente</th>
            <th>Código médico</th>
            <th>Data da consulta</th>
            <th>Hora da consulta</th>
            <th>Status da consulta</th>
            <th colspan="2">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include('conexao.php');
            $sql = "SELECT * FROM agendamento";
            $res = mysqli_query($id, $sql);


            while ($linha = mysqli_fetch_array($res)) {
              echo "
                <tr>
                 <td style='color: #373638;'>{$linha['id_agendamento']}</td>
                  <td style='color: #373638;'>{$linha['id_paciente']}</td>
                   <td style='color: #373638;'>{$linha['id_medico']}</td>
                  <td style='color: #373638;'>{$linha['data_consulta']}</td>
                  <td style='color: #373638;'>{$linha['hora']}</td>
                  <td style='color: #373638;'>{$linha['status']}</td>
                  <td><a href='edita_agendamento.php?id_agendamento={$linha['id_agendamento']}'><p style='color: #373638;'>Editar</p></a></td>
                  <td><a href='deleta_agendamento.php?id_agendamento={$linha['id_agendamento']}'><p style='color: #373638;'>Excluir</p></a></td>
                </tr>
              ";
            }
          ?>
        </tbody>
      </table>
    </div>
  </main>


  <footer>
    <div class="footer-container">
      <img src="../imagens/apae.png" alt="Logo APAE" width="200" height="200">
      <div class="footer-contato">
        <h3>CONECTE-SE CONOSCO</h3>
        <p><img src="../imagens/instituicao.png" width="40px"> APAE – Associação dos Pais e Amigos dos Excepcionais de Criciúma – SC</p>
        <p><img src="../imagens/localizacao.png" width="30px"> <a href="https://share.google/TCiTHP6GZTybb3aNS">R. Imigrante de Luca, 600 – Pinheirinho, Criciúma – SC</a></p>
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



