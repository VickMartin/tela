<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Microsoft Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SISTEMA | VM</title>
    <link rel="stylesheet" href="css/style1.css">
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
        <input type="button" 
               class="custom-button" 
               onclick="setActive('responsavel')" 
               aria-label="Cadastrar Responsável" 
               value="Responsável">
        <input type="button" 
               class="custom-button" 
               onclick="setActive('aluno')" 
               aria-label="Cadastrar Aluno(a)" 
               value="Aluno(a)">
        <input type="button" 
               class="custom-button" 
               onclick="setActive('professor')" 
               aria-label="Cadastrar Professor" 
               value="Professor">
    
    </div>
    <div class="text-center mt-3">
        <button class="btn custom-create-class-btn" 
                onclick="window.location.href='criarTurmas.php'" 
                aria-label="Criar Turma">
            Adicionar Turma
        </button></div>

    <script>
        function setActive(role) {
            // Lógica para ativar o papel correspondente
            console.log(role + " selecionado.");
        }
    </script>
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

    function setActive(formId) {
        const forms = document.getElementsByClassName('form-container');
        for (let i = 0; i < forms.length; i++) {
            forms[i].style.display = 'none';
        }

        const formToShow = document.getElementById(formId);
        if (formToShow) {
            document.getElementById('overlay').style.display = 'flex';
            formToShow.style.display = 'block';
        }
    }

    function closeModal() {
        document.getElementById('overlay').style.display = 'none';
    }

    function handleSubmit(event) {
        event.preventDefault();
        closeModal();
        document.getElementById('success-badge').style.display = 'block';
        setTimeout(() => {
            document.getElementById('success-badge').style.display = 'none';
        }, 2000);
    }
</script>
</body>
</html>
