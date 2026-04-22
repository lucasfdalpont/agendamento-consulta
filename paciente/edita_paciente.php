  <?php

    include('conexao.php');

    $id_paciente = $_GET['id_paciente'];
    $sql = "Select * from paciente where id_paciente=".$id_paciente;
    $res = mysqli_query($id,$sql );
    while ($linha = mysqli_fetch_array($res)){?>

<html lang="pt-br">
    <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edita paciente</title>
        <link rel="stylesheet" href="estilo_paciente.css">
    </head>
    <body>
          <div id="overlayMenu" class="overlayMenu"></div>

  <header>
    <div class="perfil" id="perfilBtn">
    <img src="../imagens/perfil.png" width="40px" alt="Perfil">
    </div>
    <p class="form-paciente">Edita paciente</p>
  </header>

    <nav id="menuLateral" class="menu-lateral">
  <div class="menu-header">
    <img src="../imagens/perfilPNG.png" width="40px" alt="Perfil PNG" alt="Usuário" />
  </div>
  <ul>
    <li><a href="agendamentos.html">Meus agendamentos</a></li>
    <li><a href="medicos.html">Médicos</a></li>
    <li><a href="consultas.html">Consultas</a></li>
  </ul>
  <div class="sair">
    <img src="../imagens/sair.png" width="30px" alt="Sair" alt="Sair">
   <a href="#" id="btnSair">Sair</a>
  </div>
</nav>
       <main>
            <form action="../paciente/update.php" method="post">
                <table align="center">
                <input type="hidden" name="id_paciente" value="<?php echo $linha['id_paciente'];?>">

                        <thead>
                            <tr>
                                <th class="preencha" colspan="2">Preencha o formulário</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>Digite o seu nome completo</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="nome" value="<?php echo $linha['nome'];?>" placeholder="Digite o seu nome completo"></td>
                            </tr>

                            <tr>
                                <th>Selecione o seu sexo</th>
                            </tr>
                            <tr>
                                <td>
                                    <select name="sexo">
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                        <option value="O">Outro</option>
                                </td>
                            </tr>

                        
                            <tr>
                                <th>Digite o nome da sua mãe</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="nome_mae" value="<?php echo $linha['nome_mae'];?>" placeholder="Digite o nome da sua mãe"></td>
                            </tr>

                            <tr>
                                <th>Digite o telefone da sua mãe</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="telefone_mae" value="<?php echo $linha['telefone_mae'];?>" placeholder="Digite o telefone da sua mãe"></td>
                            </tr>

                            <tr>
                                <th>Digite a sua data de nascimento</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="data_nasc" value="<?php echo $linha['data_nasc'];?>" placeholder="Digite a sua data de nascimento"></td>
                            </tr>

                            <tr>
                                <th>Digite o seu endereço</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="endereco" value="<?php echo $linha['endereco'];?>" placeholder="Digite o seu endereço"></td>
                            </tr>

                            <tr>
                                <th>Digite o seu CPF</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="cpf" value="<?php echo $linha['cpf'];?>" placeholder="Digite o seu CPF"></td>
                            </tr>

                            <tr>
                                <th>Digite o seu telefone</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="telefone" value="<?php echo $linha['telefone'];?>" placeholder="Digite o seu telefone"></td>
                            </tr>

                            <tr>
                                <th>Digite o seu email</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="email" value="<?php echo $linha['email'];?>" placeholder="Digite o seu email"></td>
                            </tr>

                            <tr>
                                <th class="label">Anexe o seu laudo</th>
                            </tr>
                            <tr>
                                <td>
                                    <label for="avatar"></label>
                                    <input type="file" id="avatar" name="laudo"  value="<?php echo $linha['laudo'];}?>" accept="image/png, image/jpeg" />
                                </td>
                            </tr>


                            <tr>
                                <td colspan="5" align="center">
                                    <input type="submit" value="Editar paciente">
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </form>
        </main>
  <footer>
    <div class="footer-container">
      <img src="../imagens/apae.png" alt="Logo APAE" width="200" height="200">

      <div class="footer-contato">
        <h3>CONECTE-SE CONOSCO</h3>
        <p><img src="../imagens/instituicao.png" alt="Instituição" width="40px" class="icone-instituicao"> APAE – Associação dos Pais e Amigos dos Excepcionais de Criciúma – SC</p>
       <p><img src="../imagens/localizacao.png" alt="Localização" width="30px" class="icone-localizacao"> <a href="https://share.google/TCiTHP6GZTybb3aNS"> R. Imigrante de Luca, 600 – Pinheirinho, Criciúma – SC</a></p>
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
