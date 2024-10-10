<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Turma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Link para Font Awesome -->
    <style>
        /* Estilo para os quadros */
        .quadro {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Espaçamento inferior entre os quadros */
        }

        /* Ocultar o resultado antes da pesquisa */
        #resultadoAluno {
            display: none;
        }

        /* Estilo da barra de pesquisa */
        .input-group {
            width: 100%;
        }

        .input-group-text {
            cursor: pointer; /* Muda o cursor para indicar que é clicável */
        }

        /* Estilo para o container dos quadros lado a lado */
        .row {
            display: flex;
            justify-content: space-between;
        }

        /* Largura dos quadros */
        .quadro-flex {
            flex: 1; /* Permite que os quadros ocupem a mesma largura */
            margin-right: 20px; /* Espaçamento à direita */
        }

        /* Para o último quadro, remove a margem */
        .quadro-flex:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="quadro quadro-flex">
                <h2>Criar Turma</h2>
                <form id="inserirProfessorForm" action="salvarProfessor.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome do Professor:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Professor" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="turma">Turma:</label>
                        <input type="text" class="form-control" id="turma" name="turma" placeholder="Turma" required>
                    </div>

                    <h2 class="mt-4">Pesquisar Aluno</h2>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="pesquisaAluno" placeholder="Nome do Aluno" required>
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="pesquisarAluno(event)">
                                <i class="fas fa-search"></i> <!-- Ícone de lupa -->
                            </span>
                        </div>
                    </div>
                    
                    <!-- Resultado da pesquisa -->
                    <div id="resultadoAluno" class="mt-3">
                        <p><strong>Aluno encontrado:</strong> <span id="nomeAlunoResultado"></span></p>
                        <button type="button" class="btn btn-success" onclick="inserirAluno()">Inserir Aluno</button>
                        <button type="button" class="btn btn-danger" onclick="cancelarSelecao()">Cancelar</button>
                    </div>

                    <!-- Botões de ação centralizados -->
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary" onclick="concluirCriacaoTurma()">Concluir</button>
                        <button type="button" class="btn btn-info" onclick="visualizarTurma()">Visualizar Turma</button>
                    </div>
                </form>
            </div>

            <!-- Quadro para exibir o professor e alunos -->
            <div class="quadro quadro-flex">
                <h2>Informações da Turma</h2>
                <p><strong>Professor:</strong> <span id="professorNome">Nenhum professor adicionado.</span></p>
                <h4>Alunos:</h4>
                <ul id="listaAlunos">
                    <li>Nenhum aluno adicionado.</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        var alunos = []; // Array para armazenar alunos

        // Função para concluir a criação da turma
        function concluirCriacaoTurma() {
            var nomeProfessor = document.getElementById('nome').value;
            document.getElementById('professorNome').textContent = nomeProfessor || 'Nenhum professor adicionado.'; // Atualiza o nome do professor
            alert('Turma criada com sucesso!'); // Mensagem de sucesso
            // Redirecionar para turmas.php
            window.location.href = 'turmas.php'; // Redireciona para turmas.php
        }

        // Função para visualizar turma
        function visualizarTurma() {
            window.location.href = 'turmas.php'; // Redireciona para turmas.php
        }

        // Função de pesquisa de aluno
        function pesquisarAluno(event) {
            event.preventDefault(); // Evita o envio do formulário
            
            // Simular uma pesquisa (aqui você pode substituir pela lógica de busca real)
            var nomeAluno = document.getElementById('pesquisaAluno').value;

            // Simula um aluno encontrado
            document.getElementById('nomeAlunoResultado').textContent = nomeAluno;
            document.getElementById('resultadoAluno').style.display = 'block'; // Exibe o resultado
        }

        // Função para inserir o aluno
        function inserirAluno() {
            var nomeAluno = document.getElementById('nomeAlunoResultado').textContent;
            if (nomeAluno) {
                alunos.push(nomeAluno); // Adiciona o aluno ao array
                atualizarListaAlunos(); // Atualiza a lista na interface
                alert('Aluno inserido com sucesso!');
            }
        }

        // Função para atualizar a lista de alunos
        function atualizarListaAlunos() {
            var listaAlunos = document.getElementById('listaAlunos');
            listaAlunos.innerHTML = ''; // Limpa a lista atual

            if (alunos.length > 0) {
                alunos.forEach(function(aluno) {
                    var li = document.createElement('li');
                    li.textContent = aluno; // Adiciona o nome do aluno à lista
                    listaAlunos.appendChild(li); // Adiciona o item à lista
                });
            } else {
                listaAlunos.innerHTML = '<li>Nenhum aluno adicionado.</li>'; // Mensagem padrão
            }
        }

        // Função para cancelar a seleção do aluno
        function cancelarSelecao() {
            document.getElementById('resultadoAluno').style.display = 'none'; // Oculta o resultado
            document.getElementById('pesquisaAluno').value = ''; // Limpa o campo de pesquisa
        }

        // Adiciona evento para o campo de pesquisa de aluno
        var pesquisaInput = document.getElementById('pesquisaAluno');
        pesquisaInput.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                pesquisarAluno(event); // Chama a função de pesquisa
            }
        });
    </script>
</body>
</html>



