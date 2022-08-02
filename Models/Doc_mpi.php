<?php
include_once('db.php');
include_once('adminPlantillas.php');

session_start();
$EmpleadoUser = $_SESSION['usuario'];

//Query para autollenado
$UserQuery = "SELECT * FROM `Alfabetico` WHERE USUARIO = '$EmpleadoUser'";
$UserInfo = mysqli_query($conexion, $UserQuery);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCIDENCIAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles/normalize.css">
    <link rel="stylesheet" href="../assets/styles/style.css">
</head>
<body>

    <header style="">

        <nav class="colorfont" style="display: flex; justify-content: space-around;
        align-items: center;">
        <a href="../../login.php" style="text-decoration: none;" class="logo"></a>
        <a href="../../login.php" style="text-decoration: none;" class="tituloH">Levantamiento de Incidencias</a>
         <a href="../../login.php" style="text-decoration: none;" class="logo2"></a>
         <div class="nav-wrapper cont">
           <div class="naveg"></div>
           </div> 
        </nav>

    </header>
    
    <section class="contenedor" style="margin-top: 2.5rem">
        
    <a href="exit.php" class="btnexit" style="text-decoration: none;">
        <button type="button" class="btn btn-outline-primary">Cerrar sesión</button>
    </a>
    </section>

    <form class="contenedor row g-3" action="Doc_mpi.php" method="post" name="MainForm" style="margin-top:1rem;" autocomplete="off">
      
<?php
while($UInfo = mysqli_fetch_array($UserInfo)){

    $DependenciaQ = $UInfo["Adscrito"];
    $RFCQ = $UInfo["RFC"];

    $TotalDays = 10;
    $DaysCountQ = "SELECT SUM(DiasSelect) SUMVALUE FROM $DependenciaQ WHERE RFC='$RFCQ' AND CondicionesGrTrabajo='ARTÍCULO 87'";
    $DaysCountC = mysqli_query($conexion, $DaysCountQ);
    while($Days = mysqli_fetch_array($DaysCountC)){
        /* EN LUGAR DE SUMAR LOS VALORES EN EL CÓDIGO CADA QUE SE CONSULTE UNO NUEVO
        LA QUERY SUMA ESOS VALORES Y ME LOS DA EN UNO
        
        ASI EVITANDO LA GENERACIÓN DE ITEMS INNECESARIOS QUE PROVOCARÍAN LA TRONADERA DEL CÓDIGO:) 
        */
        $DaysOff = $Days["SUMVALUE"];
        $AvailableDays = $TotalDays - $DaysOff;
        echo '<span id="Days" style="display:none;">'.$AvailableDays.'</span>';


    }

?>

    <div class="row">
        
        <div class="col-md-4">
            <h6 id="folio_Genereted"></h6>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div style="flex-direction: column">
                <p style="margin-right: 1.5rem;">FOLIO</p><br>

                <div class="form-inline">
                <select class="form-select right-space" name="Dependencia" id="Folio" style="width: 100%;">
                    <option value="<?php echo $UInfo["Adscrito"];?>"><?php echo $UInfo["Adscrito"];?></option>
                    <!--
                    <option value="DEJC">DEJC</option>
                    <option value="DGRPPC">DGRPPC</option>
                    <option value="DGRT">DGRT</option>
                    <option value="DGJEL">DGJEL</option>
                    <option value="DGSL">DGSL</option>
                    <option value="DGRC">DGRC</option>
                -->
                </select>

                <div class="col-md-6" id="NumFolioDependencia"></div>
               
                </div>
            </div>

            

            <script>
                var dependenciaFolio = document.getElementById('Folio')
                var NumFolioDependencia = document.getElementById('NumFolioDependencia')
                function FolioNumberFrtCharge() {
                    switch (dependenciaFolio.value) {
                        case "DEJC":
                            NumFolioDependencia.innerHTML = `
                         <select class="forId" name="folio" style="width: 100%;">
                         <option value="21">21</option>
                         </select>`;
                        break;
                        case "DGRPPC":
                            NumFolioDependencia.innerHTML = `
                         <select class="forId" name="folio" style="width: 100%;">
                         <option value="27">27</option>
                         </select>`;
                        break;
                        case "DGRT":
                            NumFolioDependencia.innerHTML = `
                         <select class="forId" name="folio" style="width: 100%;">
                         <option value="37">37</option>
                         </select>`;
                        break;
                        case "DGJEL":
                            NumFolioDependencia.innerHTML = `
                         <select class="forId" name="folio" style="width: 100%;">
                         <option value="38">38</option>
                         </select>`;
                        break;
                        case "DGSL":
                            NumFolioDependencia.innerHTML = `
                         <select class="forId" name="folio" style="width: 100%;">
                         <option value="39">39</option>
                         </select>`;
                        break;
                        case "DGRC":
                            NumFolioDependencia.innerHTML = `
                         <select class="forId" name="folio" style="width: 100%;">
                         <option value="119">119</option>
                         </select>`;
                        break;
                    }
                }
                window.onload = FolioNumberFrtCharge;
                dependenciaFolio.addEventListener("change", FolioNumberFrtCharge);
            </script>
            </div>
    </div>
    
        <h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>
        <section class="row g-3 top-space">
            <p class="col-md-6">
            SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL: 
            </p>
            <div class="col-md-6 top-space form-inline">
                <p>DEL</p>
                <input class="form-control" type="date" id="FechaInit" name="FechaInit" min="2022-01-01" max="2025-12-31" style="width:35%;"> 
                <p>AL</p>
                <input class="form-control" type="date" id="FechaFin" name="FechaFin" min="2022-01-01" max="2025-12-31" style="width:35%;"> 
            </div>
            <p class="col-md-6"></p>
            <div class="col-md-6 top-space form-inline">
                <label class="form-label" for="start">RESPECTO DEL (A)C.</label>
                <input class="form-control" type="text" id="" name="NombreE" value="<?php echo "{$UInfo['NOM']} {$UInfo['PATERNO']} {$UInfo['MATERNO']}";?>" require>
            </div>
            <div class="col-md-4 top-space form-inline">
                <label class="form-label" for="start">R.F.C</label>
                <input class="form-control" type="text" id="" name="RFC" value="<?php echo $UInfo["RFC"];?>" require>
            </div>
            <div class="col-md-5 top-space form-inline">
                <label class="form-label" for="start">TIPO DE CONTRATO- No. DE EMPLEADO(A)</label>
                <input class="form-control" type="text" id="" name="TipoContrato" value="<?php echo $UInfo["EMP"];?>">
            </div>
            <div class="col-md-3 top-space form-inline">
                <label class="form-label" for="start">SEC. SIN.</label>
                <input class="form-control" type="text" id="" name="SS" value="<?php echo $UInfo["SS"];?>">
            </div>
            <div class="col-md-12 top-space form-inline" style="justify-content: space-around;">
                <label class="form-label" for="start">ADSCRITO(A) A:</label>
                <input class="form-control" type="text" id="" name="Adscrito" value="<?php echo $UInfo["Adscrito"];?>">
            </div>
        </section>

        <hr>
        
        <section class="row">
            <h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>

            <div class="col-md-4 top-space">
                <p>TIEMPO ORDINARIO</p>
                <div class="TiempoOrdinario" style="margin-top:1rem;"> <!-- LLENADO DE LOS INPUTS CON JS --></div>
                <p class="top-space">HORARIO ESPECIAL</p>
                <div class="sp-hours" style="margin-top:1rem;"> <!-- LLENADO DE LOS INPUTS CON JS --></div>
            </div>

            <div class="col-md-4 top-space">
                <p>LICENCIAS CON SUELDO</p>
                <div class="sueldo" style="margin-top:1rem;"></div>
                <p class="top-space">HORARIOS</p>
                <div class="hours" style="margin-top:1rem;"></div>
            </div>

            <div class="col-md-4 top-space">
                <p>LICENCIAS SIN SUELDO</p>
                <div class="sinsueldo" style="margin-top:1rem;"></div>
                <p class="top-space">VACACIONES</p>
                <div class="vacaciones" style="margin-top:1rem;"></div>

        </section>

        <hr>

        <section class="row justify-content-evenly">
                <h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>
                
            <div class="col-md-4 top-space">
                <p>EXENCIÓN DE REGISTRO DE ASISTENCIA</p>
                <div class="exra" style="margin-top:1rem;"> <!-- LLENADO DE LOS INPUTS CON JS --></div>
                
                <p class="top-space">ARTÍCULO 43 FRACC. VIII</p>
                <div class="art" style="margin-top:1rem;"> <!-- LLENADO DE LOS INPUTS CON JS --></div>
            </div>
            <div class="col-md-4 top-space">
                <p>VACACIONES</p>
                <div class="vacation" style="margin-top:1rem;"></div>
                <p class="top-space"></p>
                <div class="incap" style="margin-top:1rem;"></div>
            </div>
        </section>

        <hr>
        
        <section class="row">
            <div class="col-md-12">
                <label class="form-label" for="">OBSERVACIONES</label>
                <textarea class="form-control" type="text" name="Observaciones" style="height:4rem; width:100%; margin-bottom:2rem;"></textarea>
            </div>
            <br>
            <div class="col-md-3 form-inline">
                <label class="form-label" for="start">FECHA DE INGRESO</label>
                <input class="form-control" type="date" id="date" name="FechaIngreso" min="1960-01-01" max="2035-12-31" style="width: 59%;" value="<?php echo $UInfo["FecIng"];?>"> 
            </div>
            <div class="col-md-5 form-inline" style="justify-content: space-around;">
                <label style="margin:0;" for="validationDefault04" class="form-label">DÍAS QUE LABORA</label>
                <select class="form-select" name="DiasLabora" id="" style="width: 55%;">
                  <option value="LUNES A VIERNES">LUNES A VIERNES</option>
                  <option value="LUNES A SÁBADO">LUNES A SÁBADO</option>
                  <option value="LUNES A SÁBADO">. . .</option>
                </select>
            </div>
            <div class="col-md-4 form-inline">
              <label for="validationDefault03" class="form-label">HORARIO</label>
              <input class="form-control" type="time" name="HorarioStart" style="width: 35%;" value="<?php echo $UInfo["HoraBegin"];?>"><p>A</p>
              <input class="form-control" type="time" name="HorarioEnd" style="width: 35%;" value="<?php echo $UInfo["HoraEnd"];?>" >
            </div>
            <div class="col-md-9 form-inline top-space">
                <label class="form-label" for="start">LUGAR Y FORMA Y NÚMERO DE REGISTRO: </label>
                <input class="form-control" type="text" id="" name="LugarFormNoRg" style="width: 100%;">
            </div>
            <div class="col-md-3 form-inline top-space" style="justify-content: space-around;">
                <label class="form-label" for="start">N.S.</label>
                <input class="form-control" type="text" id="" name="NS" style="width: 50%;" value="<?php echo $UInfo["NS"];?>">
            </div>
        </section>

        <?php }?>
        <div class="col-12" style="margin:2.5rem 0; display: flex;justify-content: center;">
         <button id="submit" class="btn btn-primary" style="width:10rem;" name="send" type="submit" value="Enviar">Enviar</button>
        </div>

    </form>
    <script>
        // evitamos refrescar con f5
        if (window.history.replaceState) { 
            window.history.replaceState(null, null, window.location.href); }
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--<script src="/assets/JS/directorio.js"></script>-->  
    <script src="../../jspdf.min.js"></script>
   <script src="../assets/JS/inf.js"></script>
   <script src="../assets/JS/PDFP.js"></script>
</body>
</html>

<?php

if($_POST['send']){

    $Dependencia = $_POST["Dependencia"];
    $Folio = $_POST["folio"];
    $FechaInit = $_POST["FechaInit"];
    $FechaFin = $_POST["FechaFin"];
    $NombreE = $_POST["NombreE"];
    $RFC = $_POST["RFC"];
    $TipoContrato = $_POST["TipoContrato"]; //TIPO DE DATO - NÚMERO
    $SS = $_POST["SS"];
    $Adscrito = $_POST["Adscrito"];  
    $CondicionesGrTrabajo = $_POST["CondicionesGrTrabajo"];  
    $LeyFederalTrabajadores = $_POST["LeyFederalTrabajadores"];  
    $FechaIngreso = $_POST["FechaIngreso"];
    $DiasLabora = $_POST["DiasLabora"];
    $HorarioStart = $_POST["HorarioStart"];
    $HorarioEnd = $_POST["HorarioEnd"];
    $LugarFormNoRg = $_POST["LugarFormNoRg"];
    $NS = $_POST["NS"];
    $Observaciones = $_POST["Observaciones"];
    
    
    $firstDate  = new DateTime($FechaInit);
    $secondDate = new DateTime($FechaFin);
    $intvl = $firstDate->diff($secondDate);
    //var_dump ($intvl->y . " year, " . $intvl->m." months and ".$intvl->d." day"); 

    // Total amount of days
    $days = $intvl->days;
    echo $days;
    //echo $intvl->days . " days ";
    
    $sendData = "INSERT INTO `$Dependencia` (`Folio`, `Dependencia`, `FechaInit`, `FechaFin`, `NombreE`, `RFC`, `TipoContrato`, `SS`, `Adscrito`, `CondicionesGrTrabajo`, `LeyFederalTrabajadores`, `FechaIngreso`, `DiasLabora`, `HorarioStart`, `HorarioEnd`, `LugarFormNoRg`, `NS`, `Observaciones`, `DiasSelect`) VALUES
            ('$Folio', '$Dependencia','$FechaInit', '$FechaFin','$NombreE', '$RFC', '$TipoContrato','$SS','$Adscrito', '$CondicionesGrTrabajo', '$LeyFederalTrabajadores', '$FechaIngreso', '$DiasLabora', '$HorarioStart', '$HorarioEnd', '$LugarFormNoRg', '$NS', '$Observaciones', '$days')";

var_dump($sendData);
    $dataInsert = mysqli_query($conexion, $sendData);


    if($dataInsert){
        
        //Si se agregaron correctamente los datos en la DB se muestra una ventana modal con los datos y opción de guardar en PDF
        echo '<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">';
        echo '<div class="modal-dialog modal-lg">';
        echo '    <div class="modal-content">';
        echo '      <div class="modal-header">';
        echo '        <h5 class="modal-title" id="staticBackdropLabel"> FOLIO';
        echo '        </h5>';
        echo '        <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" href="Doc_mpi.php"></a>';
        echo '      </div>';
        echo '      <div class="modal-body">';
        $folioNumber = "SELECT CONCAT( Folio, ID_Folio ) AS Result FROM $Dependencia WHERE RFC='$RFC' AND CondicionesGrTrabajo = '$CondicionesGrTrabajo' AND FechaInit = '$FechaInit'";
            $infoQuery= mysqli_query($conexion, $folioNumber);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                    /*Hacemos una primer consulta para obtener el FOLIO.
                    Guardamos el FOLIO en la variable IDFOLIO para hacer la siguiente consulta 
                    donde traemos todos los datos de dicho folio*/
                    $IDFOLIO = $show_info['Result'];
                    $IncidenciaInfoForPDF= "SELECT * FROM $Dependencia WHERE CONCAT( Folio, ID_Folio )='$IDFOLIO'";

                    $PDFinfo= mysqli_query($conexion, $IncidenciaInfoForPDF);
                        while ($info = mysqli_fetch_array($PDFinfo)){
                           validationDone($info);
                        }
                    
                }
        echo '      </div>';
        echo '      <div class="modal-footer">';
        
        echo '<a href="exit.php" class="btnexit" style="text-decoration: none;"><button type="button" class="btn btn-outline-primary">Cerrar sesión</button></a>';
        
        echo '            <a  type="button" class="btn btn-secondary" href="Doc_mpi.php">CERRAR</a>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';

        

    }


    

    echo "
    <script>
    $( document ).ready(function() {
        $('#staticBackdrop').modal('show')
    });
    </script>
      
    ";
            
    }
?>
