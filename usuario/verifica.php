<?php

session_start(); //inicia a sessão no inicio do script

//verifica se o usuario esta logado
//(se as variaveis de sessao estao definidas)

if(!isset($_SESSION['id_usuario'])) {
    echo "Acesso negado!";
    //redireciona o usuario para a pagina de login
    header("Location:../usuario/form_entrar.html");
    exit; //encerra o script
}

?>