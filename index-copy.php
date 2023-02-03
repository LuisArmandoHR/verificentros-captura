<?php
  include_once './configuraciones/bd.php';
  $conexionBD = BD::crearInstancia();

  // Recepciona los datos del login
  $usuario=isset($_POST['usuario'])?$_POST['usuario']:'';
  $password=isset($_POST['contrasena'])?$_POST['contrasena']:'';

  // Valida si algo fue enviado a traves del metodo POST
  if($_POST){
    $startSessionn = 0;
    $consulta=$conexionBD->prepare("SELECT * FROM users");
    $consulta->execute();
    $usersList=$consulta->fetchAll();
    foreach($usersList as $user){
      if($user['User'] == $usuario && $user['Password'] == $password){
        $startSessionn = $startSessionn + 1;
      }
    }
    if($startSessionn > 0){
      header('Location: secciones/index.php');
    }
    $errUser = "Usuario o contraseña incorrectos";
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
    <br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <br>    
            </div>
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
              <form action="" method="post">
                <div class="card">
                    <div class="card-header">
                        Inicio de sesion
                    </div>
                    <div class="card-body">


                        <div class="alert alert-danger" role="alert">
                          <strong>
                            

                          </strong>
                        </div>


                        <div class="mb-3">
                          <label for="" class="form-label">Usuario</label>
                          <input type="text"
                            class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Usuario">
                          <small id="helpId" class="form-text text-muted">Escriba su usuario</small>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Password</label>
                          <input type="password"
                            class="form-control" name="contrasena" id="contrasena" aria-describedby="helpId" placeholder="password">
                          <small id="helpId" class="form-text text-muted">Escriba su contraseña</small>
                        </div>
                        <button type="submit" name="accion" class="btn btn-primary">Iniciar Sesion</button>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>