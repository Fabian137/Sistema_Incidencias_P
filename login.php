<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="assets/img/isologos.png" type="image/png">
    <link rel="stylesheet" href="assets/styles/normalize.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>

    <nav class="colorfont" style="display: flex; justify-content: space-around;
    align-items: center;">
    <a href="../../login.php" style="text-decoration: none;" class="logo"></a>
    <a href="../../login.php" style="text-decoration: none;" class="tituloH">Levantamiento de Reportes</a>
    <a href="../../login.php" style="text-decoration: none;" class="logo2"></a>
    <div class="nav-wrapper cont">
    <div class="naveg"></div>
    </div>   
    </nav>
    
    <form action="validate.php" method="post" style="margin: 0 35%;" autocomplete="off">
    <div style="height: 60vh; flex-direction: column;" class="center">
        <div class="mb-3" style="margin: 5% 0;">
            <label class="form-label">Usuario</label>
            <input style="width:100%" type="text" class="form-control"  placeholder="Ingrese su usuario" name="usuario">
       </div>
       <div class="mb-3" style="margin: 5% 0;">
            <label class="form-label">Contraseña</label>
            <input style="width:100%" type="password" class="form-control" placeholder="Ingrese su contraseña" name="contraseña">
       </div>
   <div class="col-12" style="margin-top:2rem; display: flex;justify-content: center;">
    <input class="btn btn-primary" style="width:10rem;" name="send" type="submit" value="Enviar"><br>
  </div>
   
   </form> 
<?php

    if($_POST['send']){
        $Empleado = $_POST['usuario'];
    }

?>
</body>
</html>