<?php
include ('conexao.php');

$id_agendamento = $_GET['id_agendamento'];
$sql = 'Select * from agendamento where id_agendamento='.$id_agendamento;
$res = mysqli_query($id,$sql);
while ($linha = mysqli_fetch_array($res)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar agendamento</title>
    <link rel="stylesheet" href="estilo_agendamento.css">
</head>
<body>

    <div id="overlayMenu" class="overlayMenu"></div>

    <header>
        <div class="perfil" id="perfilBtn">
            <img src="../imagens/perfil.png" width="40px" alt="Perfil">
        </div>
        <p class="agendamento">Agendamento de consulta</p>
    </header>

    <nav id="menuLateral" class="menu-lateral">
        <div class="menu-header">
            <img src="../imagens/perfilPNG.png" width="40px" alt="Perfil PNG" />
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
        <form action="../agendamento/update_agendamento.php" method="post">
            <div class="form-edita">
                <table border="1" align="center">
                    <input type="hidden" name="id_agendamento" value="<?php echo $id_agendamento; ?>">

                    <thead>
                        <th colspan="2" class="titulo">Agendamento</th>
                    </thead>

                    <tr>
                        <th>Data da consulta:</th>
                        <td><input type="date" name="data_consulta" value="<?php echo $linha['data_consulta']; ?>"></td>
                    </tr>

                    <tr>
                        <th>Hora:</th>
                        <td><input type="time" name="hora" value="<?php echo $linha['hora']; ?>"></td>
                    </tr>

                    <tr>
                        <th>Status:</th>
                        <td>
                            <select name="status" required>
                                <option value="">Selecione</option>
                                <option value="Agendada">Agendada</option>
                                <option value="Realizada">Realizada</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="5" align="center">
                            <input type="submit" value="Editar agendamento">
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

<?php } ?>
