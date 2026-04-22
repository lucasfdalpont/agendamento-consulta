<?php
include('conexao.php');

$especialidade = $_GET['especialidade'] ?? 'Não informado';

if (!empty($especialidade) && $especialidade !== 'Não informado') {
    $especialidade = mysqli_real_escape_string($id, $especialidade);
    $sql_medico = "SELECT m.id_medico, m.nome_medico, e.id_especialidade, e.nome
                   FROM medico m
                   INNER JOIN especialidade e ON m.id_especialidade = e.id_especialidade
                   WHERE e.nome = '$especialidade'";
} else {
    $sql_medico = "SELECT id_medico, nome_medico FROM medico";
}

$res_medico = mysqli_query($id, $sql_medico);

$sql_paciente = "SELECT id_paciente, nome FROM paciente";
$res_paciente = mysqli_query($id, $sql_paciente);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de consulta</title>
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
            <img src="../imagens/perfilPNG.png" width="40px" alt="Perfil PNG">
        </div>
        <ul>
            <li><a href="../agendamento/pagina_inicial.php">Página inicial</a></li>
            <li><a href="../medico/lista_medicosusuario.php">Médicos</a></li>
            <li><a href="../especialidade/lista_especialidadeusuario.php">Especialidades</a></li>
        </ul>
        <div class="sair">
            <img src="../imagens/sair.png" width="30px" alt="Sair">
            <a href="#" id="btnSair">Sair</a>
        </div>
    </nav>

    <main>
        <form action="../agendamento/agendamento.php" method="post">
            <div class="form">
                <table align="center" border="1">
                    <thead>
                        <th colspan="2" class="titulo">Agendamento</th>
                    </thead>
    </pre>
                    <tr>
                        <th>Paciente</th>
                        <td>
                            <select name="id_paciente" required>
                                <option value="">Selecionar paciente</option>
                                <?php while ($paciente = mysqli_fetch_array($res_paciente)) { ?>
                                    <option value="<?= $paciente['id_paciente'] ?>"><?= $paciente['nome'] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Médico</th>
                        <td>
                            <select name="id_medico" required>
                                <option value="">Selecionar médico</option>
                                <?php while ($medico = mysqli_fetch_array($res_medico)) { ?>
                                    <option value="<?= $medico['id_medico'] ?>"><?= $medico['nome_medico'] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Data da consulta:</th>
                        <td><input type="date" name="data_consulta" required></td>
                    </tr>

                    <tr>
                        <th>Horário:</th>
                        <td>
                            <select name="hora" required>
                                <option value="">Selecione o horário</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                            </select>
                        </td>
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
                            <input type="submit" value="Agendar Consulta">
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