<?php
include('conexao.php');

if ((empty($_POST['email'])) || (empty($_POST['senha']))) {
    echo "<script>
            alert('Todos os campos devem ser preenchidos.');
            window.location.href='../usuario/form_entrar.html';
         </script>";
} else {

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
//busca por email e senha
    $sql = "SELECT * FROM usuario 
            WHERE email = '$email' 
            AND senha = '$senha'";

    $res = mysqli_query($id, $sql);
    $linha = mysqli_num_rows($res);

    if ($linha > 0) {
        $dados = mysqli_fetch_assoc($res);

        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['tipo']  = $dados['tipo']; //tipo pega do banco
        $_SESSION['iniciarSessao'] = 'ok';

        if ($dados['tipo'] == "P") {
            echo "<script>window.location.href='../agendamento/pagina_inicial.php';</script>";
        } elseif ($dados['tipo'] == "M") {
            echo "<script>window.location.href='../medico/pagina_inicial_medico.html';</script>";
        } elseif ($dados['tipo'] == "A") {
            echo "<script>window.location.href='../administrador/paginainicial_administrador.html';</script>";
        }

    } else {
        echo "<script>
              alert('Usuario ou senha incorretos.');
              window.location.href='../usuario/form_entrar.html';
             </script>";
    }
}
?>
