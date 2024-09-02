<?php
include_once "header.php";

if(isset($_GET['txt_valor'])){
    $valor=$_GET['txt_valor'];
    tab($valor);
}

function tab($numero){
    echo"<table border=2>";
    for($cont=1;$cont<=10;$cont++){
        $resultado=$numero*$cont;
        echo "<tr><td>$numero x $cont = $resultado</td></tr>";
    }
    echo"<table><a href=index.php>Voltar</a>";
}

include_once "footer.php";
?>
<td></td>