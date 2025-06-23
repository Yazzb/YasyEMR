<?php
include 'conexao.php';

$id = $_GET['id'];

// Buscar dados do paciente
$sql = "SELECT * FROM pacientes WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Paciente não encontrado.");
}

$paciente = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Prontuário de <?php echo $paciente['nome']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h1>Prontuário de <?php echo $paciente['nome']; ?></h1>

    <p><strong>CPF:</strong> <?php echo $paciente['cpf']; ?></p>
    <p><strong>Data de Nascimento:</strong> <?php echo $paciente['nascimento']; ?></p>
    <p><strong>Telefone:</strong> <?php echo $paciente['telefone']; ?></p>

    <!-- Formulário de Prescrição -->
    <h3>Prescrição</h3>
    <form action="salvar_prescricao.php" method="post">
        <input type="hidden" name="paciente_id" value="<?php echo $paciente['id']; ?>">

        <div class="mb-3">
            <label for="medicamento" class="form-label">Medicamento</label>
            <input type="text" class="form-control" id="medicamento" name="medicamento" required>
        </div>

        <div class="mb-3">
            <label for="dosagem" class="form-label">Dosagem</label>
            <input type="text" class="form-control" id="dosagem" name="dosagem" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar Prescrição</button>
    </form>

    <!-- Link para histórico -->
    <a href="historico_prescricoes.php?id=<?php echo $paciente['id']; ?>" class="btn btn-info mt-3">Ver Histórico</a>
    <br><br>
    <a href="index.php" class="btn btn-secondary">Voltar</a>

</body>
</html>