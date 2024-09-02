<?php
if(isset($_POST['txt_email'], $_POST['txt_senha'])) {
    $email=$_POST['txt_email'];
    $senha=$_POST['txt_senha'];

    if($email=="etec@gov.com" && $senha=="1234") {
        session_start();
        +header("Location:painel.php");
    } else {
        header("Location:index2.php");
    }
}
 