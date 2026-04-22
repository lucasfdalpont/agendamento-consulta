<?php

$dbname = "agendamento_consulta";

if(!($id = mysqli_connect("localhost","root"))){
    echo "Não foi possivel estabelecer conexão com o gerenciador MySQL";
    exit;
}if(!($con = mysqli_select_db($id,$dbname))){
    echo "Não foi possivel estabelecer conexão com o banco";
    exit;
}

?>