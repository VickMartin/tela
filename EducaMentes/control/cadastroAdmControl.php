<?php

require_once '../model/DTO/CadastroAdmDTO.php';
include_once '../model/DAO/cadastroAdmDAO.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Criando objeto DTO
$CadastroAdmDTO = new CadastroAdmDTO();
$CadastroAdmDTO->setNome($nome);
$CadastroAdmDTO->setEmail($email);
$CadastroAdmDTO->setSenha($senha);

// Criando objeto DAO e tentando cadastrar
$CadastroAdmDAO = new CadastroAdmDAO();

$resultado = $CadastroAdmDAO->cadastroAdm($CadastroAdmDTO);

// Verifica o resultado do cadastro e define a variável de retorno
if ($resultado) {
    $mensagem = "Usuário cadastrado com sucesso!";
    $status = "success";
} else {
    $mensagem = "Erro ao cadastrar o usuário.";
    $status = "error";
}

echo "<script type='text/javascript'>
        window.onload = function() {
            exibirModal('$mensagem', '$status');
        };
      </script>";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .modal {
            display: none;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            position: absolute;
        }
        h1 {
            color: #333;
            font-size: 24px;
        }
        p {
            font-size: 18px;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div id="modal" class="modal">
    <h1>Resultado do Cadastro</h1>
    <p id="mensagem"></p>
    <button onclick="fecharModal()">Fechar</button>
</div>

<script>
    function exibirModal(mensagem, status) {
        var modal = document.getElementById('modal');
        var mensagemP = document.getElementById('mensagem');

        mensagemP.textContent = mensagem;

        // Define a cor do texto de acordo com o status
        if (status === 'success') {
            mensagemP.classList.add('success');
        } else {
            mensagemP.classList.add('error');
        }

        // Exibe o modal
        modal.style.display = 'block';
    }

    function fecharModal() {
        // Fecha o modal
        var modal = document.getElementById('modal');
        modal.style.display = 'none';

        // Redireciona o usuário para a página home.php
        window.location.href = '../home.php';
    }
</script>


</body>
</html>

