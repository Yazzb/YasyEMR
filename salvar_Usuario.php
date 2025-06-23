<?php

include 'conexao.php';

// Pega e valida os dados do formulário
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'] ?? null;
$perfil = $_POST['perfil'] ?? null;

// Verifica se os dados estão preenchidos corretamente
if (!$email || !$senha || !$perfil) {
    die("Dados inválidos. <a href='cadastroUsuario.php'>Voltar</a>");
}

// Criptografa a senha usando bcrypt
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Prepara a query para evitar SQL Injection
$stmt = $conn->prepare("INSERT INTO usuarios (email, senha, perfil) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $senhaHash, $perfil);

if ($stmt->execute()) {
    echo "Usuário cadastrado com sucesso! <a href='login.php'>Ir para login</a>";
} else {
    // Se o email já existir (violação de UNIQUE), mostra mensagem amigável
    if ($conn->errno == 1062) {
        echo "Este email já está cadastrado. <a href='cadastroUsuario.php'>Tente novamente</a>";
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }
}

$stmt->close();
$conn->close();
?>
