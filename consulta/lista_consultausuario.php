<html>
<head>
    <link rel="stylesheet" href="estilo_listaconsulta.css">
    <meta charset="UTF-8">
    <title>Lista de consultas</title>
</head>
<body>
    <header>
        <div class="perfil" id="perfilBtn">
            <img src="../imagens/perfil.png" width="40px" alt="Perfil">
        </div>
        <p class="lista">Lista de consultas</p>
    </header>

    <div id="overlayMenu" class="overlayMenu"></div>

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

    <div class="container">
        <h2>Lista de consultas</h2>
        <table>
            <tr>
                <th>Código consulta</th>
                <th>Código agendamento</th>
                <th>Status</th>
                <th>Encaminhamento</th>
                <th>Observações</th>
            </tr>

            <?php
            include('conexao.php');
            $sql = "SELECT * FROM consulta";
            $res = mysqli_query($id, $sql);
            while ($linha = mysqli_fetch_array($res)) { ?>
            <tr>
                <td><?php echo $linha['id_consulta']; ?></td>
                <td><?php echo $linha['id_agendamento']; ?></td>
                <td><?php echo $linha['status']; ?></td>
                <td><?php echo $linha['encaminhamento']; ?></td>
                <td><?php echo $linha['observacoes']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <footer>
        <div class="footer-container">
            <img src="../imagens/apae.png" alt="Logo APAE" width="200" height="200">

            <div class="footer-contato">
                <h3>CONECTE-SE CONOSCO</h3>
                <p><img src="../imagens/instituicao.png" alt="Instituição" width="40px" class="icone-instituicao"> APAE – Associação dos Pais e Amigos dos Excepcionais de Criciúma – SC</p>
                <p><img src="../imagens/localizacao.png" alt="Localização" width="30px" class="icone-localizacao"> <a href="https://share.google/TCiTHP6GZTybb3aNS">R. Imigrante de Luca, 600 – Pinheirinho, Criciúma – SC</a></p>
            </div>

            <div class="contato">
                <div class="contato-item">
                    <img src="../imagens/telefone.png" alt="Telefone" width="50px">
                    <a href="tel:+554834381457">(48) 3438-1457</a>
                </div>

                <div class="contato-item">
                    <img src="../imagens/email.png" alt="Email">
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