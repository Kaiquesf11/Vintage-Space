
<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Vintage Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5"> 
<div class="container">
    <div class="card shadow p-4 mb-4">
        <h3 class="mb-3">Cadastro de Peças</h3>
        
        <form action="salvar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Tipo de peça</label>
                <input type="text" class="form-control" name="nome" required>
            </div>
          <div class="mb-3">
              <label class="form-label">Gênero</label>
    <select class="form-select" name="tamanho" required>
        <option value="">Masculino</option>
        <option value="PP">Feminino</option>
    </select>
    <label class="form-label">Tamanho</label>
    <select class="form-select" name="tamanho" required>
        <option value="">Tamanho único</option>
        <option value="PP">PP</option>
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
        <option value="PLUS SIZE">Plus Size</option>
    </select>
</div>
            
            <div class="mb-3">
    <label class="form-label">Coleção</label>
    <select class="form-select" name="colecao" required>
        <option value="infantil">Infantil</option>
        <option value="adolescente">Adolescente</option>
        <option value="adulto">Adulto</option>
    </select>
</div>
<div class="mb-3">
    <label class="form-label">Qualidade</label>
    <select class="form-select" name="qualidade" required>
        <option value="moderado">Moderado</option>
        <option value="seminovo">Seminovo</option>
        <option value="novo">Novo</option>
    </select>
</div>
            <div class="mb-3">
                <label class="form-label">Preço</label>
                <div class="input-group">
        <span class="input-group-text">R$</span>
        <input type="number" class="form-control" name="preco" step="0.01" placeholder="0,00">
    </div>
</div>

<button type="submit" class="btn btn-success">Salvar</button>
</form>

<div style="display: flex; align-items: center; gap: 12px; margin-top: 25px;">
    <a href="dados_cadastrados.php" class="btn btn-warning">
        Dados Cadastrados
    </a>

    <a href="sair.php" class="btn btn-danger">
        Sair da conta
    </a>
</div>

</body>
</html>