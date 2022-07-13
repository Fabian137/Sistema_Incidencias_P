<?php
include_once('Models/db.php');
session_start();

$usuario=$_POST['usuario'];
$passcode=$_POST['contraseña'];

$consulta="SELECT*FROM users where usuarios='$usuario' and password='$passcode'";
//$consulta_admin="SELECT*FROM users where usuario='admin' and password='admin' and tipo_usuario = 'admin'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

while ($responseQ = mysqli_fetch_array($resultado)){
  if ($responseQ['tipo_user'] == "admin") {
    header("location:/Models/adminConsultas.php");
  }
  if($responseQ['tipo_user'] == "user"){
    $_SESSION['usuario'] = $usuario;
    header("location:/Models/Doc_mpi.php");
     
    }
}
if(!$filas){
  //echo '<script>alert("Error de autenticación. Por favor intente de nuevo");</script>';
  header("location:login.php");
}
