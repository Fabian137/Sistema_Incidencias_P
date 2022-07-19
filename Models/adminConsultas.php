<?php
include_once('db.php');
include_once('adminPlantillas.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCIDENCIAS CONSULTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles/normalize.css">
    <link rel="stylesheet" href="../assets/styles/style.css">
</head>
<body>



    <header style="background-color: #dfdfdf;">

    <nav style="margin-left:6%; display: flex; justify-content: space-around;
    align-items: center;">
    <a href="../login.php" style="text-decoration: none;" class="logo"></a>
    <a href="../login.php" style="text-decoration: none;" class="tituloH">Consulta de Incidencias</a>
    <a href="../login.php" style="text-decoration: none;" class="logo2"></a>
    <div class="nav-wrapper cont">
    <div class="naveg"></div>
    </div>   
    </nav>

    </header>

    <section class="contenedor" style="margin-top: 2.5rem">
    <button type="button" class="btn btn-outline-primary">
    <a href="nameSearch.php" class="btnexit" style="text-decoration: none;">Nombre</a>
    </button>
    </section>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="adminConsultas.php" method="post" autocomplete="off" id="validationForm" name="validationForm">
        
          <input style="display:none;" type="text" name="NumeroFolio" id="NumeroFolio" value="">
          <input style="display:none;" type="text" name="Dependency" id="Dependency" value="">
            <div class="center">
                <div class="col-10" style="margin: 5% 0;">
                    <label class="form-label">Nombre de quien valida la incidencia</label>
            <div class="input-group">
            <div class="input-group-text"><img class="login-img" src="../assets/img/user.svg" alt="user icon"></div>
            <input type="text" class="form-control" placeholder="Ingrese el nombre" name="Validation">
            </div>
            </div>
            </div>
            <input class="btn btn-primary" style="width:10rem;" name="validar" type="submit" value="Validar"><br>
        </form>
      </div>
      <div class="modal-footer">
      <!---  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>

<!-- VALIDACION DE INCIDENCIA QUERY-->
<?php

?>
    <form class="contenedor row g-4 center" action="adminConsultas.php" method="post" autocomplete="off">
        <div class="col-md-3 contenedor" style="margin-top:3rem; text-align: center;">
            <h6 for="validationDefault04" class="form-label">FOLIO</h6>
            <div class="contenedor">
            <input class="form-control" type="text" id="" name="ID_folio"style="width:100%;">
        </div>
        </div>
        <div class="col-12" style="display: flex;justify-content: center;">
            <input class="btn btn-primary" style="width:10rem;" name="consult" type="submit" value="Consultar"><br>
          </div>
        </form>
        <form class="contenedor row g-4 center" action="" method="post" id="formPend" autocomplete="off">
        <?php
        if($_POST['validar']){
          $validacion = $_POST["Validation"];
          $folio = $_POST["NumeroFolio"];
          $Dependencia = $_POST["Dependency"];

          /* QUERY PARA VALIDAR LA INCIDENCIA/FOLIO*/
          $validationQuery = "UPDATE $Dependencia SET `Validation` = '$validacion' WHERE CONCAT(Folio, ID_folio)=$folio";
          /* QUERY PARA VOLVER A MOSTRAR EL FOLIO YA VALIDADO*/
          $Refresh_info= "SELECT * FROM $Dependencia WHERE CONCAT(Folio, ID_folio)=$folio";
          
          $validacionIncidencia = mysqli_query($conexion, $validationQuery);
        
          if($validacionIncidencia){
            $infoQuery= mysqli_query($conexion, $Refresh_info);
            while ($show_info = mysqli_fetch_array($infoQuery)){
              validationDone($show_info);
            }
          }
                          
          //header("Refresh:1");
        
        }


        if($_POST['consult']){
            $folNum = $_POST["ID_folio"];

            $arr1 = str_split($folNum, 2);
            switch($arr1[0]){
                case '21':
                $DEJC_info= "SELECT * FROM DEJC WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DEJC_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    validation($show_info);
                }
                break;

                case "27":
                $DGRPPC_info= "SELECT * FROM DGRPPC WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DGRPPC_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    validation($show_info);
                }
                
                break;
                
                case '37':
                $DGRT_info= "SELECT * FROM DGRT WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DGRT_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    if($show_info['Validation']){
                      validationDone($show_info);
                    }
                    elseif (!$show_info['Validation']) {
                      validation($show_info);
                    }
                }
                break;

                case "38":
                $DGJEL_info= "SELECT * FROM DGJEL WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DGJEL_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    validation($show_info);
                }
                break;

                case "39":
                $DGSL_info= "SELECT * FROM DGSL WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DGSL_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    validation($show_info);
                }
                break;

                case "11":
                $DGRC_info= "SELECT * FROM DGRC WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DGRC_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    validation($show_info);
                }
                break;

            }
            
         }
         ?>
</form>

      <script>
        const folionumber = document.getElementById('folio').textContent;
        const Dependencia = document.getElementById('dependencia').textContent;
        const Titulo = document.getElementById('staticBackdropLabel')
        Titulo.innerHTML += `VALIDACIÓN DE INCIDENCIA: ${folionumber}`;
        document.validationForm.NumeroFolio.value = folionumber;
        document.validationForm.Dependency.value = Dependencia;
      </script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../../jspdf.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <!--<script src="/assets/JS/directorio.js"></script>-->  
   <script src="../assets/JS/inf.js"></script>
   <script src="../assets/JS/pdf.js"></script>
   
</body>
</html>