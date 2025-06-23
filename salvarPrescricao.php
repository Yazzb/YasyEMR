<?php
include 'conexao.php';

$paciente_id = $_POST['paciente_id'];
$medicamento = $_POST['medicamento'];
$dosagem = $_POST['dosagem'];

$sql = "INSERT INTO prescricoes (paciente_id, medicamento, dosagem) VALUES ('$paciente_id', '$medicamento', '$dosagem')";

if ($conn->query($sql) === TRUE) {
    header("Location: prontuario.php?id=$paciente_id");
    exit();
} else {
    echo "Erro ao salvar: " . $conn->error;
}
?>