<?php
include_once('Models/db.php');
$usuario=$_POST['usuario'];
$passcode=$_POST['contraseña'];

session_start();
//$_SESSION['usuario']=$usuario;

$consulta="SELECT*FROM users where usuario='$usuario' and password='$passcode'";
//$consulta_admin="SELECT*FROM users where usuario='admin' and password='admin' and tipo_usuario = 'admin'";
$resultado=mysqli_query($conexion,$consulta);
//$response = mysqli_query($conexion,$consulta_admin);
//$filas_response = mysqli_num_rows($response);
$filas=mysqli_num_rows($resultado);

while ($responseQ = mysqli_fetch_array($resultado)){
  if ($responseQ['tipo_usuario'] == "admin") {
    header("location:/Models/adminConsultas.php");
  }
  if($responseQ['tipo_usuario'] == "user"){
    header("location:/Models/Doc_mpi.php");
  }
}
if(!$filas){
  echo '<script>alert("Error de autenticación. Por favor intente de nuevo");</script>';
  header("location:login.php");
}
