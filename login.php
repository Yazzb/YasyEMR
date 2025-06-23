<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login - Prontuário Médico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-dark d-flex align-items-center" style="height: 100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">

                        <!-- Exibir mensagem de erro -->
                        <?php if (isset($_GET['erroLogin']) && $_GET['erroLogin'] == 'dadosInvalidos') : ?>
                            <div class="alert alert-danger text-center">
                                Email ou senha inválidos!
                            </div>
                        <?php endif; ?>

                        <form action="login.php" method="POST">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="emailUsuario" name="emailUsuario" type="email" placeholder="nome@exemplo.com" required />
                                <label for="emailUsuario">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="senhaUsuario" name="senhaUsuario" type="password" placeholder="Senha" required />
                                <label for="senhaUsuario">Senha</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" href="index.php" class="btn btn-primary">Entrar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="cadastroUsuario.php">Criar nova conta</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
