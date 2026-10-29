
<?php
session_start();

// Apaga os dados da sessão
$_SESSION = [];

// Encerra a sessão
session_destroy();

// Volta para a página de login
header("Location: login.php");
exit;
?>
