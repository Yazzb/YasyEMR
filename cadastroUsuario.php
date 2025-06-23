<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Cadastro - Prontuário Médico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-body">
                                    <form action="salvar_Usuario.php" method="POST">                                        
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="email" type="email" placeholder="nome@exemplo.com" required />
                                            <label for="inputEmail">Email</label>
                                        </div>                                      
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="senha" type="password" placeholder="Senha" required />
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                        <div class="form-floating mb-3 mt-3">
                                            <select class="form-select" id="inputPerfil" name="perfil" required>
                                                <option value="" disabled selected>Selecione o perfil</option>
                                                <option value="medico">Médico</option>
                                                <option value="enfermeiro">Enfermeiro</option>
                                                <option value="administrativo">Administrativo</option>
                                            </select>
                                            <label for="inputPerfil">Perfil</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                            <a href="login.php" class="btn btn-secondary">Voltar</a>
                                        </div>
                                    </form>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
