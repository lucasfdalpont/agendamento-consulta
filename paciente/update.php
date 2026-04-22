<?php

include ('conexao.php');

$id_paciente = $_POST['id_paciente'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$nome_mae = $_POST['nome_mae'];
$telefone_mae = $_POST['telefone_mae'];
$data_nasc = $_POST['data_nasc'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql_atual = "SELECT laudo FROM paciente WHERE id_paciente = $id_paciente";
$res_atual = mysqli_query($id, $sql_atual);
$linha = mysqli_fetch_assoc($res_atual);

$laudo_atual = $linha['laudo'];  

if (!empty($_FILES['laudo']['name'])) {
    $novo_laudo = $_FILES['laudo']['name'];
    $tmp = $_FILES['laudo']['tmp_name'];

    move_uploaded_file($tmp, "uploads/" . $novo_laudo);

    $laudo = $novo_laudo;   // usa o arquivo novo
} else {
    $laudo = $laudo_atual; // mantém o arquivo original
}


$sql = "Update paciente set nome = '$nome',
sexo = '$sexo',
nome_mae = '$nome_mae',
telefone_mae = '$telefone_mae',
data_nasc = '$data_nasc',
endereco = '$endereco',
cpf = '$cpf',
telefone= '$telefone',
email = '$email',
laudo = '$laudo'
where id_paciente = $id_paciente";


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
    <h2>Paciente atualizado com sucesso</h2>
    <p>Você será redirecionado em instantes...</p>
</div>

<script>
    setTimeout(() => {
        window.location.href = 'lista_pacientes.php';
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
    <h2>Não foi possível atualizar o paciente</h2>
    <p>Tente novamente.</p>
</div>

<script>
    setTimeout(() => {
        window.location.href = 'lista_pacientes.php';
    }, 3000);
</script>";
}

?>