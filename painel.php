<?php
include_once "header.php";
include_once "verificar_login.php";

echo "<span>Login efetuado</span>";
$_SESSION["nome"]="Adalberto";
$nome=$_SESSION['user'];

$_SESSION['banda']=[
    'nome' => 'PANIC! At the Disco',
    'cidade' => 'Las Vegas, Nevada',
    'foto' => 'Panic.jpeg',
];

echo "<h2>$nome</h2>";
echo "<a href='exibir.php' target='_blank'>Voltar</a>";
include_once "footer.php";
?>