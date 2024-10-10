<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Microsoft Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SISTEMA | VM</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">EducaMentes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
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
                <br>
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" class="inputSub" placeholder="ex: (62) 99999-9999">
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="inputSub" placeholder="ex: adm123@gmail.com">
            </fieldset>

            <!-- Quadro Informativo e Cadastro -->
            <div class="info-and-forms">
                <div class="info-section">
                    <h2>Quadro Informativo:</h2>
                    <textarea placeholder="Digite sua mensagem aqui..."></textarea>
                </div>

                <div class="form-section">
                    <h2>Quem você deseja cadastrar:</h2>
                    <div class="button-group d-flex justify-content-center">
                        <div class="d-flex flex-column me-3">
                            <button class="btn btn-primary mb-2" onclick="setActive('responsavel')">Responsável</button>
                            <button class="btn btn-primary mb-2" onclick="setActive('aluno')">Aluno(a)</button>
                            <button class="btn btn-primary mb-2" onclick="setActive('professor')">Professor</button>
                        </div>
                        <button class="btn custom-create-class-btn" onclick="window.location.href='criarTurmas.php'">Criar Turma</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlRA3hAN2RknLz8hZ1RYdg6YOJzW8eDXk5IQp6LRhIv6K0BGPTF7iGG8hGz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVQI1kUFAs3yU5GAwVRH1J5mnInFuErEOn38pFwAdl+0kA8dWNYKk4Z3lx4d+8L8" crossorigin="anonymous"></script>
    
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
