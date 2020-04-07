<?php include('conexion.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Formulario web hola</title>
    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12">
                <br>
                <div class="card">
                    <div class="card-header">
                        FORMULARIO BASICO
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Registrar usuario</h5>
                        <br>
                    <form action="index.php" method="POST">

                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre"  required>
                        <br>
                        <input type="text" class="form-control" name="apellido" placeholder="Ingrese el apellido" required>
                        <br>
                        <input type="email" class="form-control" name="correo" placeholder="Ingrese el correo" required>
                        <br>
                        <input type="password" class="form-control" name="contraseña" placeholder="Ingrese el contraseña" required>
                        <br>
                        <input type="password" class="form-control" name="contraseña2" placeholder="Confirmar contraseña" required>
                        <br>
                        <button type="submit" name="btn-enviar" class="btn btn-primary" >Crear usuario</button>
                    </form>
                    <?php

                     if (isset($_POST['btn-enviar'])) {

                      $nombre = $_POST['nombre'];
                      $apellido = $_POST['apellido'];
                      $correo = $_POST['correo'];
                      $contraseña = $_POST['contraseña'];
                      $contraseña2 = $_POST['contraseña2'];
                    
                      if ($contraseña == $contraseña2) {
                        $sql="INSERT INTO usuarios (Nombre , Apellido , Correo , Contraseña) VALUES ('$nombre','$apellido','$correo',$contraseña)";
                        $insert=$conexion->query($sql);
                        echo "<div class='alert alert-success' role='alert'>
                        El usuario se ha creado !
                      </div>";

                      }else {
                        echo "<div class='alert alert-danger' role='alert'>
                        Las contraseñas no coinciden !
                      </div>";
                      }
                      
                    }
                    ?>

                    </div>
                    </div>

       
            </div>

            <div class="col-md-6 col-lg-6 col-xs-12">
            <br>
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CORREO</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql2 = "SELECT * FROM usuarios";
  $result=mysqli_query($conexion,$sql2);

  while ($mostrar=mysqli_fetch_array($result)) {
  ?>
    <tr>
      <th scope="row"><?php echo $mostrar['Id']?></th>
      <td><?php echo $mostrar['Nombre']?></td>
      <td><?php echo $mostrar['Apellido']?></td>
      <td><?php echo $mostrar['Correo']?></td>
    </tr>

    <?php
    }
    ?>
    
  </tbody>
</table>
            </div>
        </div>
    </div>
</body>
</html>