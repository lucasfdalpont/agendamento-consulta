<?php
include 'conexao.php';

$sql = "SELECT nome, descricao FROM especialidade";
$resultado = $id->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="estilo_inicio.css">
</head>
<body>
    <div id="overlayMenu" class="overlayMenu"></div>

    <header>
        <div class="perfil" id="perfilBtn">
            <img src="../imagens/perfil.png" width="40px" alt="Perfil">
        </div>
        <p class="titulo-header">Página inicial</p>
    </header>

    <nav id="menuLateral" class="menu-lateral">
        <div class="menu-header">
            <img src="../imagens/perfilPNG.png" width="40px" alt="Usuário">
        </div>
        <ul>
            <li><a href="pagina_inicial.php">Página inicial</a></li>
            <li><a href="../especialidade/lista_especialidadeusuario.php">Especialidades</a></li>
        </ul>
        <div class="sair">
            <img src="../imagens/sair.png" width="30px" alt="Sair">
            <a href="#" id="btnSair">Sair</a>
        </div>
    </nav>

    <main>
        <div class="image-container">
            <img src="../imagens/foto.jpg" alt="Foto APAE">
            <div class="overlay"></div>
            <div class="conteudo">
                <div class="texto">
                    <h1>
                        <span class="agende">Agende já sua <br> consulta na <br></span>
                        <span class="destaque">APAE de <br> Criciúma!</span>
                    </h1>
                </div>
                <img src="../imagens/apae.png" alt="Logo APAE" class="logo-apae">
            </div>
        </div>

        <h1 class="atendimentos-oferecidos">
            Atendimentos oferecidos pela <span class="apae">APAE de Criciúma:</span>
        </h1>
        
<div class="tabela">
    <?php while ($row = $resultado->fetch_assoc()) { ?>
        <div class="card-especialidade">
            <a href="../paciente/form_paciente.php?especialidade=<?= urlencode($row['nome']) ?>">
                <h2><?= $row['nome'] ?></h2>
            </a>
            <p><?= $row['descricao'] ?></p>
        </div>
    <?php } ?>
</div>


    </main>
    <footer>
        <div class="footer-container">
            <img src="../imagens/apae.png" alt="Logo APAE" width="200" height="200">
            <div class="footer-contato">
                <h3>CONECTE-SE CONOSCO</h3>
                <p><img src="../imagens/instituicao.png" alt="Instituição" width="40px" class="icone-instituicao"> APAE – Associação dos Pais e Amigos dos Excepcionais de Criciúma – SC</p>
                <p><img src="../imagens/localizacao.png" alt="Localização" width="30px" class="icone-localizacao"><a href="https://share.google/TCiTHP6GZTybb3aNS"> R. Imigrante de Luca, 600 – Pinheirinho, Criciúma – SC</a></p>
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