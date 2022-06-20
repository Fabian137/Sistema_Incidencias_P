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
    <title>Menú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles/normalize.css">
    <link rel="stylesheet" href="../assets/styles/style.css">
</head>
<body>

    <header style="height: 15vh; background-color: rgb(232, 230, 224);">

        <div class="center contenedor" style="justify-content: space-between; align-items: center;">
            <!--<div class="musirech"><a href="index.html"><h1>MUSIRECH</h1></a></div>-->
            <a href="../login.php" class="logo"></a>
        </div>

    </header>

          <!-- Modal -->
          <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Menu</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <button type="button" class="btn btn-outline-primary">
                        <a href="https://www.consejeria.cdmx.gob.mx/" class="btnexit" style="text-decoration: none;">CEJUR</a>
                      </button>
                      <button type="button" class="btn btn-outline-primary">
                        <a href="https://rppapps.consejeria.cdmx.gob.mx/scg_deaV3/index.php?login=1&failure=5" class="btnexit" style="text-decoration: none;">Control de Gestión</a>
                      </button>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Directorio Tolsa</button>
                    </div>
                </div>
            </div>
        </div>

        

        <form class="contenedor row g-4 center" action="adminConsultas.php" method="post" id="formPend" autocomplete="off">

        

        <div class="col-md-3 contenedor" style="margin-top:1rem; text-align: center;">
            <h6 for="validationDefault04" class="form-label">FOLIO</h6>
            <div class="contenedor">
            <input class="form-control" type="text" id="" name="ID_folio"style="width:100%;">
          </div>
          </div>
          <div class="col-12" style="display: flex;justify-content: center;">
            <input class="btn btn-primary" style="width:10rem;" name="consult" type="submit" value="Consultar"><br>
          </div>
        </form>
        <?php
        if($_POST['consult']){
            $Dependencia = $_POST["Dependencia"];
            $folNum = $_POST["ID_folio"];

            var_dump($folNum);
            var_dump();

            $arr1 = str_split($folNum, 2);
            switch($arr1[0]){
                case '21':
                $DEJC_info= "SELECT * FROM DEJC WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DEJC_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    infoDependencia($show_info);
                }
                break;

                case "27":
                $DGRPPC_info= "SELECT * FROM DGRPPC WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DGRPPC_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    infoDependencia($show_info);
                }
                
                break;
                
                case '37':
                $DGRT_info= "SELECT * FROM DGRT WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DGRT_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    infoDependencia($show_info);
                }
                break;

                case "38":
                $DGJEL_info= "SELECT * FROM DGJEL WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DGJEL_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    infoDependencia($show_info);
                }
                break;

                case "39":
                $DGSL_info= "SELECT * FROM DGSL WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DGSL_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    infoDependencia($show_info);
                }
                break;

                case "11":
                $DGRC_info= "SELECT * FROM DGRC WHERE CONCAT(Folio, ID_folio)=$folNum";
                $infoQuery= mysqli_query($conexion, $DGRC_info);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    infoDependencia($show_info);
                }
                break;

            }
            
         }
         ?>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--<script src="/assets/JS/directorio.js"></script>-->  
   <script src="../assets/JS/inf.js"></script>
   
</body>
</html>