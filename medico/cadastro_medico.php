<?php

include('conexao.php');

$nome_medico = $_POST['nome_medico'];
$id_especialidade = $_POST['id_especialidade'];
$crm = $_POST['crm'];
$rqe = $_POST['rqe'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


$sql = "INSERT INTO medico (nome_medico,id_especialidade,crm,rqe,telefone,endereco)
        VALUES ('".$nome_medico."',
                '".$id_especialidade."',
                '".$crm."',
                '".$rqe."',
                '".$telefone."',
                '".$endereco."')";

$resp = mysqli_query($id,$sql);
if($resp){
    echo "<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: linear-gradient(to right, #FAF6F6 30%,  #2A3E85 90%);
        transition: background-color 1s ease;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }

    .card {
        background: #ffffff; /* Card branco */
        padding: 30px 50px;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(241, 128, 128, 0.25);
        text-align: center;
        animation: fadeIn 1s ease;
    }

    .card h2 {
        color: #FDDC00; /* Azul do fundo */
        font-size: 1.5em;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .card p {
        color: #555; /* Cinza suave */
        font-size: 0.95em;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
</style>

<div class='card'>
    <h2>Médico cadastrado com sucesso</h2>
    <p>Você será redirecionado em instantes...</p>
</div>

<script>
    setTimeout(() => {
        window.location.href = '../administrador/paginainicial_administrador.html';
    }, 3000);
</script>";
}else{
    echo "<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: linear-gradient(to right, #FAF6F6 30%,  #2A3E85 90%);
        transition: background-color 1s ease;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }

    .card {
        background: #ffffff; /* Card branco */
        padding: 30px 50px;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(241, 128, 128, 0.25);
        text-align: center;
        animation: fadeIn 1s ease;
    }

    .card h2 {
        color: #FDDC00; /* Azul do fundo */
        font-size: 1.5em;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .card p {
        color: #555; /* Cinza suave */
        font-size: 0.95em;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
</style>

<div class='card'>
    <h2>Não foi possível cadastrar o médico!</h2>
    <p>Tente novamente.</p>
</div>

<script>
    setTimeout(() => {
        window.location.href = 'form_medico.php';
    }, 3000);
</script>";
}

?>