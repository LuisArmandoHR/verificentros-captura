<?php

session_start();
if(!isset($_SESSION['sesion'])){  
  header('Location: ../index.php');
}

?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
            
<body>
  <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="index.php">Inicio</a>
          <a class="nav-item nav-link" href="vista-captura.php">Captura</a>
          <a class="nav-item nav-link" href="reportes.php">Reportes</a>
          <a class="nav-item nav-link" href="cerrar.php">Cerrar Sesion</a>
      </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <br>
        <div class="row">

        