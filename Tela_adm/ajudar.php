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
        <!-- Quadro Informativo e Cadastro -->
        <div class="info-and-forms">
            <div class="info-section">
                <h2>Quadro Informativo:</h2>
                <textarea placeholder="Digite sua mensagem aqui..."></textarea>
            </div>

            <div class="form-section">
                <h2>Quem você deseja cadastrar:</h2>
                <div class="button-group">
                    <input type="button" class="custom-button" onclick="setActive('responsavel')" aria-label="Cadastrar Responsável" value="Responsável">
                    <input type="button" class="custom-button" onclick="setActive('aluno')" aria-label="Cadastrar Aluno(a)" value="Aluno(a)">
                    <input type="button" class="custom-button" onclick="setActive('professor')" aria-label="Cadastrar Professor" value="Professor">
                </div>
            </div>
        </div>
    </div>

    <!-- Formulários ocultos -->
    <div id="form-modals">
        <div id="responsavel" class="form-container" style="display:none;">
            <h3>Cadastro de Responsável</h3>
            <form onsubmit="handleSubmit(event)">
                <label for="nomeResponsavel">Nome:</label>
                <input type="text" id="nomeResponsavel" required>
                <label for="telefoneResponsavel">Telefone:</label>
                <input type="tel" id="telefoneResponsavel" required>
                <label for="emailResponsavel">Email:</label>
                <input type="email" id="emailResponsavel" required>
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
                <button type="button" class="btn btn-secondary mt-2" onclick="closeModal()">Fechar</button>
            </form>
        </div>

        <div id="aluno" class="form-container" style="display:none;">
            <h3>Cadastro de Aluno(a)</h3>
            <form onsubmit="handleSubmit(event)">
                <label for="nomeAluno">Nome:</label>
                <input type="text" id="nomeAluno" required>
                <label for="idadeAluno">Idade:</label>
                <input type="number" id="idadeAluno" required>
                <label for="turmaAluno">Turma:</label>
                <input type="text" id="turmaAluno" required>
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
                <button type="button" class="btn btn-secondary mt-2" onclick="closeModal()">Fechar</button>
            </form>
        </div>

        <div id="professor" class="form-container" style="display:none;">
            <h3>Cadastro de Professor</h3>
            <form onsubmit="handleSubmit(event)">
                <label for="nomeProfessor">Nome:</label>
                <input type="text" id="nomeProfessor" required>
                <label for="disciplinaProfessor">Disciplina:</label>
                <input type="text" id="disciplinaProfessor" required>
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
                <button type="button" class="btn btn-secondary mt-2" onclick="closeModal()">Fechar</button>
            </form>
        </div>
    </div>

    <div id="overlay" style="display:none;" class="overlay"></div>

    <script>
        function setActive(formId) {
            const forms = document.getElementsByClassName('form-container');
            for (let i = 0; i < forms.length; i++) {
                forms[i].style.display = 'none';
            }
            const formToShow = document.getElementById(formId);
            if (formToShow) {
                document.getElementById('overlay').style.display = 'block';
                formToShow.style.display = 'block';
            }
        }

        function closeModal() {
            document.getElementById('overlay').style.display = 'none';
            const forms = document.getElementsByClassName('form-container');
            for (let i = 0; i < forms.length; i++) {
                forms[i].style.display = 'none';
            }
        }

        function handleSubmit(event) {
            event.preventDefault();
            closeModal();
            alert('Cadastro realizado com sucesso!');
        }
    </script>
</body>
</html>
