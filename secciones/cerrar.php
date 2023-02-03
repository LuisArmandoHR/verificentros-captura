<?php

session_start();
$_SESSION['sesion']=NULL;
session_destroy();
header('Location: ../index.php');

?>