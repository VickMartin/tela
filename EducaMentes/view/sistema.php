<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SISTEMA | VM</title>
    
    <style>
    /* Geral */
.container {
    max-width: 2000px; /* Define a largura máxima do contêiner */
    max-height: 4000px;
    background-color: #F2E5BF;
}
        
body{
    font-family: sans-serif;
    background-color: #F2E5BF;
}
/* Estilo para a barra de navegação */
.custom-navbar {
    background-color: #257180;
    
}

/* Estilo para o texto da marca */
.custom-brand {
    color: #fff; /* Branco */
    font-size: 1.5rem;
    font-weight: bold;
}
.custom-brand:hover {
    color: #fff;
}

/* Estilo para os links da navegação */
.custom-link {
    color: #fff; /* Branco */
    margin-right: 1rem;
}

.custom-link:hover {
    color: #6cf1a4; /* Cor clara ao passar o mouse */
}

/* Estilo para o botão "Sair" */
.custom-btn {
    background-color: #dc3545; /* Vermelho do Bootstrap */
    color: white;
    border-radius: 50px;
    padding: 0.5rem 1.5rem;
}

.custom-btn:hover {
    background-color: #c82333; /* Vermelho mais escuro ao passar o mouse */
}

/* --------------------------------------------------------------------------------------------- */



.blur-background {
    filter: blur(5px); /* Aplica um efeito de desfoque de 5px no conteúdo */
    pointer-events: none; /* Impede interações com os elementos enquanto estão desfocados */
}

.overlay {
    position: fixed; /* Fixa o overlay na tela, mesmo ao rolar a página */
    top: 0; /* Alinha ao topo da página */
    left: 0; /* Alinha à esquerda da página */
    width: 100%; /* O overlay cobre 100% da largura da tela */
    height: 100%; /* O overlay cobre 100% da altura da tela */
    background-color: rgba(0, 0, 0, 0.6); /* Fundo semitransparente para escurecer a tela */
    display: flex; /* Usa flexbox para centralizar o conteúdo */
    justify-content: center; /* Centraliza horizontalmente o conteúdo dentro do overlay */
    align-items: center; /* Centraliza verticalmente o conteúdo */
    z-index: 9999; /* Mantém o overlay acima de todos os outros elementos */
}

.modal-form {
    background-color: white; /* Fundo branco para o formulário modal */
    padding: 20px; /* Espaçamento interno de 20px */
    border-radius: 10px; /* Bordas arredondadas no modal */
    max-width: 500px; /* Define uma largura máxima de 500px */
    width: 100%; /* Largura total do modal */
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1); /* Sombra suave para destacar o modal */
    z-index: 10000; /* Garante que o modal fique acima do overlay */
    pointer-events: auto; /* Permite interação com o modal */
}

.form-container {
    display: none; /* Oculta o contêiner do formulário até ser ativado */
}

.close-btn {
    text-align: right; /* Alinha o botão de fechar à direita */
    font-size: 1.5rem; /* Tamanho da fonte para o botão de fechar */
    cursor: pointer; /* Indica que o botão é clicável */
}

.success-badge {
    display: none; /* Inicialmente oculto até ser ativado */
    position: fixed; /* Fixa a posição na tela */
    top: 20px; /* Posiciona 20px abaixo do topo */
    right: 20px; /* Posiciona 20px à esquerda da borda direita */
    background-color: #302c2c; /* Cor de fundo verde (indicando sucesso) */
    color: white; /* Cor do texto branco */
    padding: 10px 20px; /* Espaçamento interno */
    border-radius: 5px; /* Bordas arredondadas */
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1); /* Sombra suave para destacar o badge */
    z-index: 10000; /* Garante que o badge fique acima de outros elementos */
}

.button-group {
    margin-bottom: 20px; /* Espaçamento inferior entre o grupo de botões */
}

.custom-create-class-btn {
    background-color: #a74628; /* Cor de fundo verde para o botão */
    color: white; /* Cor do texto branco */
    border: none; /* Remove a borda do botão */
    padding: 10px 20px; /* Define espaçamento interno do botão */
    border-radius: 5px; /* Bordas arredondadas */
    cursor: pointer; /* Indica que o botão é clicável */
    font-size: 16px; /* Tamanho da fonte */
    transition: background-color 0.3s, transform 0.3s; /* Animações suaves na cor de fundo e transformação */
    width: 40%; /* Define a largura do botão */
    height: 60px; /* Define a altura do botão */
}

.custom-create-class-btn:hover {
    background-color: #218838; /* Altera a cor de fundo ao passar o mouse */
    color: white; /* Mantém o texto branco ao passar o mouse */
    transform: scale(1.05); /* Aumenta o botão em 5% ao passar o mouse */
}

.profile {
    position: relative; /* Necessário para posicionamento absoluto dos elementos filhos */
    text-align: center; /* Centraliza o conteúdo de texto no contêiner */
    width: 10%; /* Define a largura do contêiner do perfil */
}

.profile img {
    border-radius: 50%; /* Torna a imagem circular */
    margin-bottom: 10px; /* Espaçamento abaixo da imagem */
    width: 100px; /* Define a largura da imagem */
    height: 100px; /* Define a altura da imagem */
    object-fit: cover; /* Garante que a imagem se ajuste ao contêiner sem distorcer */
}
 /* -------------------- icone de atualizar a foto------------------- */
.edit-icon {
    position: absolute; /* Permite o posicionamento em relação ao contêiner pai */
    right: 100px; /* Posiciona o ícone a 80px da borda direita */
    top: 31%; /* Posiciona o ícone verticalmente */
    transform: translateY(-50%); /* Centraliza verticalmente o ícone */
    background-color: #E6FFFF; /* Define a cor de fundo do ícone */
    border-radius: 50%; /* Torna o ícone circular */
    cursor: pointer; /* Indica que o ícone é clicável */
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); /* Adiciona uma leve sombra ao ícone */
    padding: 4px; /* Define o espaçamento interno do ícone */
    display: flex; /* Ativa o flexbox para centralizar o conteúdo */
    justify-content: center; /* Centraliza o conteúdo horizontalmente */
    align-items: center; /* Centraliza o conteúdo verticalmente */
    color:#302c2c;
}

.edit-icon svg {
    width: 18px; /* Define a largura do ícone SVG */
    height: 15px; /* Define a altura do ícone SVG */
}
.bi-pencil-square{
    width: 20px; /* Define a largura do ícone SVG */
    height: 18px; /* Define a altura do ícone SVG */
    color:black;
}

#fileInput {
    display: none; /* Oculta o input de arquivo até ser acionado */
}

.square-container {
    border: 1px solid #ccc; /* Borda cinza ao redor do contêiner */
    padding: 20px; /* Espaçamento interno */
    border-radius: 20px; /* Bordas arredondadas */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
    margin-bottom: 20px; /* Espaçamento inferior entre os quadros */
    width: 150%; /* Aumenta a largura do contêiner */
}

/* ------------------------fieldset do perfil---------------- */
.profile {
    width: 30%; /* Define a largura do contêiner do perfil para 60% do espaço disponível */
    max-width: 300px; /* Define uma largura máxima de 600px */
    padding: 15px; /* Diminui o espaçamento interno */
    margin: 0 auto; /* Centraliza o fieldset */
    background-color: #257180;
    color: white; /* Texto branco */
    border-radius: 10px; /* Bordas arredondadas */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Sombra para profundidade */
    height: 465px;
}
/* #E6FFFF */
.profile input {
    background-color: #E6FFFF; /* Fundo verde escuro nos inputs */
    color: black; /* Texto branco */
    border: none; /* Remove a borda padrão */
    border-radius: 50px; /* Bordas arredondadas nos inputs */
    padding: 3px; /* Espaçamento interno nos inputs */
    width: 90%; /* Largura ajustada para caber no contêiner */
    margin-bottom: 25px; /* Espaçamento inferior entre os inputs */
    
}
.profile input:hover{
    background-color: #E6FFFF;
}

.inputSub {
    background-color: white; /* Fundo branco nos inputs */
    color: black; /* Texto preto */
    border: 1px solid #ccc; /* Borda cinza padrão */
    padding: 10px; /* Espaçamento interno */
    border-radius: 4px; /* Bordas arredondadas */
}

.inputSub:focus {
    background-color: white; /* Fundo branco quando em foco */
    color: black; /* Texto preto quando em foco */
    outline: none; /* Remove o contorno padrão quando em foco */
}

.profile label {
    display: block; /* Exibe o rótulo ocupando toda a linha */
    margin-bottom: 7px; /* Espaçamento inferior entre o rótulo e o input */
    font-weight: 400; /* Define o peso da fonte */
    text-align: left; /* Alinha o texto à esquerda */
}

h1 {

    text-align: left;
    color: #302c2c; /* Branco */
    font-size: 28px;
    font-weight: bold;
}

main-content {
    width: 55%; /* Ajusta a largura do conteúdo principal */
}

.main-content h2 {
    margin-bottom: 10px; /* Espaçamento inferior do título */
}

.main-content textarea {
    width: 40%; /* Define a largura da área de texto */
    height: 100px; /* Define a altura da área de texto */
    resize: none; /* Remove a capacidade de redimensionar a área de texto */
    padding: 10px; /* Espaçamento interno */
    border: 1px solid #ccc; /* Borda cinza */
    border-radius: 5px; /* Bordas arredondadas */
}



.content-wrapper {
    display: flex; /* Usa flexbox para alinhar os elementos */
    gap: 20px; /* Espaçamento entre os elementos */
    align-items: flex-start; /* Alinha os itens ao topo */
}

/* Fieldset do perfil */
.profile {
    flex: 1; /* O contêiner do perfil ocupa 1 fração do espaço disponível */
}

.info-and-forms {
    flex: 1; /* O contêiner de informações ocupa 1 fração do espaço disponível */
}

.info-section, .form-section {
    background-color: rgba(255, 255, 255, 0.9); /* Fundo branco com leve opacidade */
    padding: 20px; /* Espaçamento interno */
    border-radius: 10px; /* Bordas arredondadas */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
    margin-bottom: 20px; /* Espaçamento inferior entre as seções */
}
/* ---------------- quadro informativo-------------------------------------------- */
textarea {
    width: 100%; /* Largura total para a área de texto */
    height: 150px; /* Altura fixa */
    resize: none; /* Impede o redimensionamento */
    padding: 10px; /* Espaçamento interno */
    border-radius: 4px; /* Bordas arredondadas */
    border: 1px solid #ccc; /* Borda cinza */
    display: block;
    
    
}
h2{
    text-align: center;
}
.custom-create-class-btn {
    background-color: #257180;  /* Cor de fundo azul cadete */
    color: white; /* Texto branco */
    width: 25%;
    font-size: 20px;
}
.custom-create-class-btn:hover{
    background-color:darkslategrey ; /* Cor ao passar o mouse */ 
    color: white;
}

/* Estilos básicos para os inputs */
.button-group {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}
.custom-button {
    background-color: #CB6040;
    color: white; /* Texto branco */
    border: none; /* Remove a borda padrão */
    border-radius: 5px; /* Bordas arredondadas */
    padding: 10px 20px; /* Espaçamento interno */
    margin: 0 10px; /* Margem entre os botões */
    cursor: pointer; /* Cursor de ponteiro ao passar o mouse */
    transition: background-color 0.3s; /* Transição suave ao passar o mouse */
    font-size: 18px;
}
.custom-button:hover {
    background-color: #FD8B51; /* Cor ao passar o mouse */
    
}
        /* Estilos do modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 30px;
            border-radius: 50px;
            border: 1px solid #888;
            width: 25%;
            
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 20px;
            font-weight: bold;
            text-align: right;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .form-control{
            border-radius: 50px;
            margin-bottom: 15px;
        }
        
        
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand custom-brand" href="#">EducaMentes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link custom-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn custom-btn">Sair</a>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<br>
<div class="container">
    <header class="header text-center">
        <h1>PAINEL DO ADMINISTRADOR</h1>
        <hr>
    </header>

    <div class="content-wrapper d-flex">
        <!-- Perfil -->
        <fieldset class="profile">
            <legend>Perfil</legend>
            <img src="https://via.placeholder.com/100" alt="Foto do Administrador" id="fotoPerfil">
            <div class="edit-icon" onclick="document.getElementById('fileInput').click();">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </div>
            <input type="file" id="fileInput" accept="image/*" onchange="atualizarFoto()">
            <br>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="inputSub" placeholder="ex: Pedro Almeida">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>
            <br>
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" class="inputSub" placeholder="ex: (62) 99999-9999">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="inputSub" placeholder="ex: adm123@gmail.com">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>
        </fieldset>

        <!-- Quadro Informativo e Cadastro -->
        <div class="info-and-forms">
            <div class="info-section">
                <h2>Quadro Informativo:</h2>
                <textarea placeholder="Digite sua mensagem aqui..."></textarea>
            </div>

            <div class="form-section">
                <h2>Quem você deseja cadastrar:</h2>
                <div class="button-group">
                    <input type="button" class="custom-button" onclick="setActive('responsavel')" value="Responsável">
                    <input type="button" class="custom-button" onclick="setActive('aluno')" value="Aluno(a)">
                    <input type="button" class="custom-button" onclick="setActive('professor')" value="Professor">
                </div>
                <div class="text-center mt-3">
                    <button class="custom-create-class-btn" onclick="window.location.href='criarTurmas.php'">
                        Adicionar Turma
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para cadastro -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modal-title">Cadastrar</h2>
            <form id="registration-form" onsubmit="handleSubmit(event)">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" required>

                <label for="email-modal">Email:</label>
                <input type="email" id="email-modal" name="email" class="form-control" required>

                <div id="additional-fields"></div>

               <center> <button type="submit" class="btn btn-primary mt-3">Cadastrar</button></center>
            </form>
        </div>
    </div>

    <script>
        function atualizarFoto() {
            const fileInput = document.getElementById('fileInput');
            const fotoPerfil = document.getElementById('fotoPerfil');
            const file = fileInput.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                fotoPerfil.src = e.target.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        function setActive(role) {
            const modalTitle = document.getElementById('modal-title');
            const additionalFields = document.getElementById('additional-fields');
            additionalFields.innerHTML = ''; // Limpa campos adicionais

            modalTitle.textContent = `Cadastrar ${role.charAt(0).toUpperCase() + role.slice(1)}`;

            if (role === 'aluno') {
                additionalFields.innerHTML = `
                    <label for="matricula">Matrícula:</label>
                    <input type="text" id="matricula" name="matricula" class="form-control" required>
                    <label for="curso">Curso:</label>
                    <input type="text" id="curso" name="curso" class="form-control" required>
                `;
            } else if (role === 'responsavel') {
                additionalFields.innerHTML = `
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" class="form-control" required>
                    <label for="telefone-responsavel">Telefone:</label>
                    <input type="tel" id="telefone-responsavel" name="telefone" class="form-control" required>
                `;
            } else if (role === 'professor') {
                additionalFields.innerHTML = `
                    <label for="especialidade">Especialidade:</label>
                    <input type="text" id="especialidade" name="especialidade" class="form-control" required>
                    <label for="tempo_experiencia">Tempo de Experiência:</label>
                    <input type="text" id="tempo_experiencia" name="tempo_experiencia" class="form-control" required>
                `;
            }

            const modal = document.getElementById('modal');
            modal.style.display = "block";
        }

        function closeModal() {
            const modal = document.getElementById('modal');
            modal.style.display = "none";
        }

        // Fecha o modal se o usuário clicar fora dele
        window.onclick = function(event) {
            const modal = document.getElementById('modal');
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }

        function handleSubmit(event) {
            event.preventDefault();
            closeModal();
            alert('Cadastro realizado com sucesso!'); // Aqui você pode substituir por lógica para enviar os dados
        }
    </script>
</body>
</html>
