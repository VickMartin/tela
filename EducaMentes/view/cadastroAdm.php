<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Administrador</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            height: 100vh;
            background-color: #257180; /* Cor de fundo */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div {
            background-color: rgba(0, 0, 0, 0.70); /* Fundo do formulário */
            padding: 30px;
            border-radius: 50px;
            color: white;
            width: 280px;
            text-align: center;
            border: 1px solid black;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 20px;
            text-align: center; /* Centraliza o título "Cadastro Administrador" */
        }

        form {
            text-align: left; /* Alinha o formulário à esquerda */
        }

        input {
            padding: 10px;
            border: none;
            outline: none;
            font-size: 14px;
            border-radius: 50px;
            width: 92%;
            margin-bottom: 10px; /* Espaçamento entre os campos */
        }

        .inputSubmit {
            background-color: #257180; /* Cor do botão */
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 40%;
            color: white;
            font-size: 15px;
            cursor: pointer;
            display: block; /* Torna o botão um elemento de bloco */
            margin: 20px auto; /* Centraliza o botão */
        }

        label {
            font-weight: bold;
            font-size: 16px;
            color: white;
            display: block;
            margin-bottom: 8px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .toggle-visibility {
            cursor: pointer;
            font-size: 12px;
            color: #00ADEF;
            text-align: right;
            margin-top: -10px;
            margin-bottom: 10px;
            display: block;
        }

        .toggle-visibility:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div>
    <form id="formCadastro" onsubmit="return validarSenhas()" action="../control/cadastroAdmControl.php" method="POST">
        <h1>Cadastro Administrador</h1> <!-- Centralizado -->
        <br>
        <label for="nome">Nome:</label> <!-- Alinhado à esquerda -->
        <input type="text" name="nome" placeholder=" Insira seu nome..." required>
        <br>
        <label for="email">Email:</label> <!-- Alinhado à esquerda -->
        <input type="email" name="email" placeholder=" Insira seu e-mail..." required>
        <br>
        <label for="senha">Senha:</label> <!-- Alinhado à esquerda -->
        <input type="password" id="senha" name="senha" placeholder="Crie uma senha..." required>
        <span class="toggle-visibility" onclick="toggleSenhaVisibility('senha')">Mostrar senha</span>

        <label for="confirmaSenha">Confirmar senha:</label> <!-- Alinhado à esquerda -->
        <input type="password" id="confirmaSenha" name="confirmaSenha" placeholder="Confirme sua senha..." required>
        <span class="toggle-visibility" onclick="toggleSenhaVisibility('confirmaSenha')">Mostrar senha</span>

        <p id="mensagemErro" class="error"></p> <!-- Mensagem de erro -->
        
        <input class="inputSubmit" type="submit" name="submit" value="Cadastrar">
    </form>       
</div>

<script>
    function validarSenhas() {
        // Obtém os valores dos campos de senha
        var senha = document.getElementById('senha').value;
        var confirmaSenha = document.getElementById('confirmaSenha').value;
        var mensagemErro = document.getElementById('mensagemErro');
        
        // Limpa a mensagem de erro anterior
        mensagemErro.textContent = '';
        
        // Verifica se as senhas são diferentes
        if (senha !== confirmaSenha) {
            mensagemErro.textContent = 'Senhas incompatíveis';
            return false; // Impede o envio do formulário
        }
        
        return true; // Permite o envio do formulário se as senhas forem iguais
    }

    function toggleSenhaVisibility(id) {
        var campoSenha = document.getElementById(id);
        var span = campoSenha.nextElementSibling;
        
        if (campoSenha.type === "password") {
            campoSenha.type = "text";
            span.textContent = "Ocultar senha";
        } else {
            campoSenha.type = "password";
            span.textContent = "Mostrar senha";
        }
    }
</script>

</body>
</html>



