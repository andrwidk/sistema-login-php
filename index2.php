<?php
include_once "header.php";
?>

<form action="verificar.php" method="post">
    <label>Login</label>
    <input type="email" required name="txt_email"><br>
    <label>Senha</label>
    <input type="password" required name="txt_senha"><br>
    <input type="submit" value="Entrar">
</form>

<?php
include_once "footer.php";
?>