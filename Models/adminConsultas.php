<?php
include_once('db.php');
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

        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Menu</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body contenedor" style="display:flex; flex-direction:column;">
                      <button type="button" class="btn btn-outline-primary">
                        <a href="../login.php" class="btnexit" style="text-decoration: none;">REGISTRO</a>
                      </button>
                      <button type="button" class="btn btn-outline-primary" style="margin-top: 0.8rem;">
                        <a href="Models/s-interfaz.php" class="btnexit" style="text-decoration: none;">Altas</a>
                      </button>
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
        if(isset($_POST['consult'])){
            $ID_folio = $_POST["ID_folio"];
            $infoFolio= "SELECT * FROM data WHERE ID_folio=$ID_folio";
            $infoFolio_result= mysqli_query($conexion, $infoFolio);
            while ($show_infoFolio = mysqli_fetch_array($infoFolio_result)){
                echo var_dump($show_infoFolio);
            ?>

        <section class="contenedor row">
            <h6>FOLIO: <?php echo $show_infoFolio['ID_folio'] ?></h6>
            <h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>
            <p>SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL:  DEL <?php echo $show_infoFolio['DayInit']?> AL <?php echo $show_infoFolio['FechaFin']?></p>
            <br>
            <p>RESPECTO DEL (A)C. <?php echo $show_infoFolio['NombreE']?></p>

            <p class="col-md-4">RFC: <?php echo $show_infoFolio['RFC']?></p>
            <p class="col-md-4">TIPO DE CONTRATO-No. DE EMPLEADO(A): <?php echo $show_infoFolio['TipoContrato']?></p>
            <p class="col-md-4">SEC. SIN. <?php echo $show_infoFolio['SS']?></p>

            <p class="col-md-4">ADSCRITO(A) A: <?php echo $show_infoFolio['Adscrito']?></p>
        <hr>
            <h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>
            <p class="col-md-12"><?php echo $show_infoFolio['CondicionesGrTrabajo']?></p>
        <hr>
            <h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>
            <p class="col-md-12"><?php echo $show_infoFolio['LeyFederalTrabajadores']?></p>
        <hr>
            <p class="col-md-4">FECHA DE INGRESO:<?php echo $show_infoFolio['FechaIngreso']?></p>
            <p class="col-md-4">DÍAS QUE LABORA: <?php echo $show_infoFolio['DiasLabora']?></p>
            <p class="col-md-4">HORARIO: <?php echo $show_infoFolio['HorarioStart']?> A <?php echo $show_infoFolio['HorarioEnd']?></p>
            <p class="col-md-12">LUGAR FORMA Y NÚMERO DE REGISTRO</p>
            <p class="col-md-12">N.S.</p>
        </section>






    <?php
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