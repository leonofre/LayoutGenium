<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <!--Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" />
    <!--Tipografia-->
    <title>Sistema Genium</title>
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../img/icon_Blue.png" alt="Sistema Genium">
                    <h2 class="name-icon"><span class="color-1">ENIUM</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>
            <nav class="sidebar">
                <a href="./index.html">
                    <span class="material-symbols-sharp">dashboard</span>
                    <h3>Inicío</h3>
                </a>
                <a href="./matriculas.html">
                    <span class="material-symbols-sharp">person_add</span>
                    <h3>Matrículas</h3>
                </a>
                <a href="./sistema_aluno.html">
                    <span class="material-symbols-sharp">cast_for_education</span>
                    <h3>Sistema do Aluno</h3>
                </a>
                <a href="./informativo.html">
                    <span class="material-symbols-sharp">display_settings</span>
                    <h3>Informativos</h3>
                </a>
                <a href="./alunos.html">
                    <span class="material-symbols-sharp">badge</span>
                    <h3>Alunos</h3>
                </a>
                <a href="./renovacao.html" class="active">
                    <span class="material-symbols-sharp">group_add</span>
                    <h3>Renovação</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">recent_actors</span>
                    <h3>Cadastros</h3>
                    <span class="material-symbols-sharp expand">chevron_right</span>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">chair</span>
                    <h3>Secretaria</h3>
                    <span class="material-symbols-sharp expand">chevron_right</span>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">attach_money</span>
                    <h3>Financeiro</h3>
                    <span class="material-symbols-sharp expand">chevron_right</span>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">home_storage</span>
                    <h3>Formulários</h3>
                    <span class="material-symbols-sharp expand">chevron_right</span>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Sair</h3>
                </a>
            </nav>
        </aside>

        <main>

            <h1>Renovação</h1>

            <div class="insights">

                <div class="sales">
                    <span class="material-symbols-sharp">person_add</span>
                    <div class="middle">
                        <div class="left">

                            <h2>Renovação de Matrículas</h2>
                            <h4>Primeiro, selecione a turma do(s) aluno(s):</h4><br>
                            <div class="grid">
                                <div>
                                    <b class="name-color">Unidade:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Unidade</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Modalidade:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Unidade</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                </div>
                                <br>
                                <div>
                                    <b class="name-color">Curso:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Modalidade</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Turno:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione o Turno</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <button class="renovation">OK</button>
                                </div>
                                <br>
                                <div>
                                    <b class="name-color">Turma:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Turma</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                    <br>
                                    <b class="name-color">Ano:</b>
                                    <select name="select">
                                        <option value="valor1">Valor 1</option>
                                        <option value="valor2" selected>Selecione a Ano</option>
                                        <option value="valor3">Valor 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <section class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-sharp active">light_mode</span>
                    <span class="material-symbols-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Olá, <b>Ian</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../img/Icon.png" alt="Foto Perfil">
                    </div>
                </div>
            </div>

        </section>
    </div>

    <script src="../index.js">

    </script>

</body>
</html>