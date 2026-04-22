<?php

    include('conexao.php');

    $id_usuario = $_GET['id_usuario'];
    $sql = "Select * from usuario where id_usuario=".$id_usuario;
    $res = mysqli_query($id,$sql );
    while ($linha = mysqli_fetch_array($res)){?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edita usuário</title>
  <link rel="stylesheet" href="estilo_entrar.css">
</head>
<body>
 <img class="logo_apae" src="../imagens/apae.png" alt="Logo APAE">
  <div class="form"> 
    <form action="autentica.php" method="post">
      <table>
        <tr>
          <td><h1>Editar</h1></td>
        </tr>

          <tr>
            <td><p>Digite o seu email</p>
            <input type="text" name="email" value="<?php echo $linha['email'];?>"</td>
          </tr>
        

          <tr>
            <td><p>Digite a sua senha</p>
            <input type="text" name="senha" value="<?php echo $linha['senha'];}?>"></td>
          </tr>


           <tr>
            <td>
                <p>Tipo</p>
                <select name="tipo">
                <option>Selecione</option>
                <option value="P">Paciente</option>
                <option value="M">Medico</option>
           </td>
          </tr>

          

        
        <tr>
          <td style="text-align: center;"><input type="submit"></td>
        </tr>

        <tr>
          <td style="text-align: center;"><a href="form_usuario.html">Não tem uma conta? Cadastre-se</a></td>
        </tr>


         </table>
      </form>
    </div>
 
  
</body>
</html>