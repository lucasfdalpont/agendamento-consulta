<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<link rel="stylesheet" href="estilo_consulta.css">
<body>
    <div id="overlayMenu" class="overlayMenu"></div>

    <header>
        <div class="perfil" id="perfilBtn">
            <img src="../imagens/perfil.png" width="40px" alt="Perfil">
        </div>
        <p class="consulta">Cadastro de consulta</p>
    </header>

    <nav id="menuLateral" class="menu-lateral">
        <div class="menu-header">
            <img src="../imagens/perfilPNG.png" width="40px" alt="Perfil PNG" alt="Usuário">
        </div>
        <ul>
             <li><a href="../medico/pagina_inicial_medico.html">Página inicial</a></li>
             <li><a href="../consulta/form_consulta.php">Cadastro de consulta</a></li>
            <li><a href="../agendamento/lista_agendamentousuario.php">Agendamentos</a></li>
            <li><a href="../paciente/lista_pacienteusuario.php">Pacientes</a></li>
            <li><a href="../consulta/lista_consultausuario.php">Consultas</a></li>
        </ul>
        <div class="sair">
            <img src="../imagens/sair.png" width="30px" alt="Sair" alt="Sair">
            <a href="#" id="btnSair">Sair</a>
        </div>
    </nav>

    <main>
        <form action="../consulta/consulta.php" method="post">
            <div class="form">
                <table border="1" align="center">
                    <thead>
                        <th colspan="2" class="titulo">Consulta</th>
                    </thead>

                    <tr>
                        <th>Id agendamento:</th>
                        <td>
                            <select name="id_agendamento" id="">
                                <?php 
                                include('conexao.php');
                                $sql = "Select id_agendamento from agendamento";
                                $resp = mysqli_query($id,$sql);
                                while ($item = mysqli_fetch_array($resp)) { ?> 
                                    <option value="<?php echo $item['id_agendamento']?>"><?php echo $item['id_agendamento']?></option>
                                <?php 
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Status:</th>
                        <td><input type="text" name="status"></td>
                    </tr>

                    <tr>
                        <th>Encaminhamento:</th>
                        <td><input type="text" name="encaminhamento"></td>
                    </tr>

                    <tr>
                        <th>Observações:</th>
                        <td><input type="text" name="observacoes"></td>
                    </tr>

                    <tr>
                        <td colspan="5" align="center">
                            <input type="submit" value="Informar pós-consulta">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </main>

    <footer>
        <div class="footer-container">
            <img src="../imagens/apae.png" alt="Logo APAE" width="200" height="200">

            <div class="footer-contato">
                <h3>CONECTE-SE CONOSCO</h3>
                <p><img src="../imagens/instituicao.png" width="40px" class="icone-instituicao"> APAE – Associação dos Pais e Amigos dos Excepcionais de Criciúma – SC</p>
                <p><img src="../imagens/localizacao.png" width="30px" class="icone-localizacao"> <a href="https://share.google/TCiTHP6GZTybb3aNS">R. Imigrante de Luca, 600 – Pinheirinho, Criciúma – SC</a></p>
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