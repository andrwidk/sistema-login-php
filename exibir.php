<?php
include_once 'header.php';
include_once 'verificar_login.php';

echo $_SESSION['nome'];
var_dump($_SESSION['banda']);
echo "<img src='".$_SESSION['banda']['foto']."'>";
include_once 'footer.php';
?>