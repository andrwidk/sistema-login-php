<?php
include_once "header.php";
?>

<form action="tabuada.php" method="get">
    <label>Digite um número para a tabuada</label>
    <input type="number" name="txt_valor" required>
    <input type="submit" value="Calcular">
</form>

<?php
include_once "footer.php"
?>