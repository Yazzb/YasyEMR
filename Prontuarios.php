<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Prontuário Médico - Buscar Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.php">Prontuário Médico</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" onsubmit="return false;">
            <div class="input-group">
                <input class="form-control" id="navbarSearchInput" type="text" placeholder="Pesquisar paciente..." aria-label="Search" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button" onclick="filtrarTabela()">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Inicio
                        </a>
                        <a class="nav-link" href="Prontuarios.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Prontuários
                        </a>
                        <a class="nav-link" href="cadastroUsuario.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-id-badge"></i></div>
                            Cadastro Perfil
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Prontuário Médico
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Localizar Paciente</h1>
                    <form id="formBusca" class="row g-3 mb-4" onsubmit="filtrarTabela(); return false;">
                        <div class="col-md-6">
                            <label for="inputNome" class="form-label">Nome do Paciente</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Digite o nome do paciente" />
                        </div>
                        <div class="col-md-2">
                            <label for="inputAtendimento" class="form-label">Nº Atendimento</label>
                            <input type="text" class="form-control" id="inputAtendimento" placeholder="0001" />
                        </div>
                        <div class="col-md-2">
                            <label for="inputIdade" class="form-label">Idade</label>
                            <input type="text" class="form-control" id="inputIdade" placeholder="Ex: 40" />
                        </div>
                        <div class="col-md-2">
                            <label for="inputTelefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="inputTelefone" placeholder="(11) 99999-9999" />
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                            <button type="button" class="btn btn-secondary" onclick="limparFiltros()">Limpar</button>
                        </div>
                    </form>

                    <h2>Prontuários Médicos</h2>
                    </table>
                     <!-- Botão para exibir o formulário -->
                    <button class="btn btn-primary mb-3" onclick="mostrarFormulario()">Adicionar Paciente</button>

                    <!-- Div onde o formulário será carregado -->
                    <div id="formularioContainer" style="display:none;">
                        <?php include 'formProntuario.php'; ?>
</div>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Prontuário Médico 2024</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script>
        // Inicializa a tabela com DataTables simples
        const dataTable = new simpleDatatables.DataTable("#datatablesSimple");

        // Função para filtrar a tabela com base nos campos do formulário
        function filtrarTabela() {
            const nome = document.getElementById("inputNome").value.toLowerCase();
            const atendimento = document.getElementById("inputAtendimento").value.toLowerCase();
            const idade = document.getElementById("inputIdade").value.toLowerCase();
            const telefone = document.getElementById("inputTelefone").value.toLowerCase();

            dataTable.rows().forEach(row => {
                const cells = row.cells;
                const paciente = cells[0].textContent.toLowerCase();
                const cpf = cells[1].textContent.toLowerCase();
                const nascimento = cells[2].textContent.toLowerCase();
                const telefoneCel = cells[3].textContent.toLowerCase();

                // Critérios de filtro: Nome e Telefone no exemplo, mas você pode ajustar
                const matchNome = paciente.includes(nome);
                const matchTelefone = telefoneCel.includes(telefone);

                // Exemplo: filtrar apenas pelo nome e telefone (melhore se quiser)
                if (matchNome && matchTelefone) {
                    dataTable.row(row).show();
                } else {
                    dataTable.row(row).hide();
                }
            });
        }

        // Limpar filtros e mostrar todas as linhas
        function limparFiltros() {
            document.getElementById("inputNome").value = "";
            document.getElementById("inputAtendimento").value = "";
            document.getElementById("inputIdade").value = "";
            document.getElementById("inputTelefone").value = "";
            dataTable.rows().show();
        }
    </script>
</body>
</html>
<script>
function mostrarFormulario() {
    const div = document.getElementById("formularioContainer");
    div.style.display = div.style.display === "none" ? "block" : "none";
}
</script>
