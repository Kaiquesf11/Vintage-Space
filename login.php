
<?php
session_start();

if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
    header("Location: cadastro_pecas.php");
    exit;
}

$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? "";
    $senha = $_POST["senha"] ?? "";

    // Credenciais de exemplo
    if ($usuario === "VintageSpace" && $senha === "29102026") {
        session_regenerate_id(true);
        $_SESSION['logado'] = true;

        header("Location: index.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">

<div class="container">
    <div class="card shadow p-4 mb-4">
        <h3 class="mb-3">Login</h3>

        <?php if ($erro !== ""): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($erro) ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Usuário</label>
                <input type="text" class="form-control"
                       name="usuario" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control"
                       name="senha" required>
            </div>

            <button type="submit" class="btn btn-success">
                Entrar
            </button>
        </form>
    </div>
</div>

</body>
</html>
