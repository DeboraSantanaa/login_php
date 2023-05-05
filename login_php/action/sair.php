<?php
//deslogar usuario

session_start();

unset($_SESSION['logado']);

header('Location:../index.php');

?>