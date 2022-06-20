<?php
include_once('db.php');
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

    <header style="height: 15vh; background-color: rgb(232, 230, 224);">

                <div class="center contenedor" style="justify-content: space-between; align-items: center;">
                    <!--<div class="musirech"><a href="index.html"><h1>MUSIRECH</h1></a></div>-->
                    <a href="../login.php" class="logo"></a>
                    <h6>
                    </h6>

    </header>

    <form class="contenedor row g-3" action="Doc_mpi.php" method="post" style="margin-top:1rem;" autocomplete="off">
        
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
                    <option value="DEJC">DEJC</option>
                    <option value="DGRPPC">DGRPPC</option>
                    <option value="DGRT">DGRT</option>
                    <option value="DGJEL">DGJEL</option>
                    <option value="DGSL">DGSL</option>
                    <option value="DGRC">DGRC</option>
                </select>
                <!--<h6 name="Folio" id="NumFolioDependencia"></h6>-->

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
                    }
                }
                window.onload = FolioNumberFrtCharge;
                dependenciaFolio.addEventListener("change", () => {
                  // if value switched by client
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
                         <option value="27">27</option>
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
                  });
            </script>
            <?php
            //if($conexion){//adminFa137*
              /*  $consulta2= "SELECT MAX(ID_folio) FROM data";
                $datos2= mysqli_query($conexion, $consulta2);
                //var_dump($show);
                while ($show2 = mysqli_fetch_array($datos2)){
                    //var_dump($show2);
                    $newFolio = $show2 ['MAX(ID_folio)'] + 1;*/
                    //var_dump($newFolio);     
            
                //}
          //  }
            ?>
            </div>
    </div>
    
        <h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>
        <section class="row g-3 top-space">
            
            <p class="col-md-6">
            SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL: 
            </p>
            <div class="col-md-6 top-space form-inline">
                <p>DEL</p>
                <input class="form-control" type="date" id="" name="FechaInit" min="2022-01-01" max="2025-12-31" style="width:35%;"> 
                <p>AL</p>
                <input class="form-control" type="date" id="" name="FechaFin" min="2022-01-01" max="2025-12-31" style="width:35%;"> 
            </div>
            <p class="col-md-6"></p>
            <div class="col-md-6 top-space form-inline">
                <label class="form-label" for="start">RESPECTO DEL (A)C.</label>
                <input class="form-control" type="text" id="" name="NombreE" >
            </div>
            <div class="col-md-4 top-space form-inline">
                <label class="form-label" for="start">R.F.C</label>
                <input class="form-control" type="text" id="" name="RFC">
            </div>
            <div class="col-md-5 top-space form-inline">
                <label class="form-label" for="start">TIPO DE CONTRATO- No. DE EMPLEADO(A)</label>
                <input class="form-control" type="text" id="" name="TipoContrato">
            </div>
            <div class="col-md-3 top-space form-inline">
                <label class="form-label" for="start">SEC. SIN.</label>
                <input class="form-control" type="text" id="" name="SS">
            </div>
            <div class="col-md-12 top-space form-inline" style="justify-content: space-around;">
                <label class="form-label" for="start">ADSCRITO(A) A:</label>
                <input class="form-control" type="text" id="" name="Adscrito" >
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
                <p class="top-space">INCAPACIDAD</p>
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
            <div class="col-md-4 form-inline">
                <label class="form-label" for="start">FECHA DE INGRESO</label>
                <input class="form-control" type="date" id="date" name="FechaIngreso" min="2022-01-01" max="2025-12-31"> 
            </div>
            <div class="col-md-4 form-inline" style="justify-content: space-around;">
                <label style="margin:0;" for="validationDefault04" class="form-label">DÍAS QUE LABORA</label>
                <select class="form-select" name="DiasLabora" id="" style="width: 55%;">
                  <option value="LUNES A VIERNES">LUNES A VIERNES</option>
                  <option value="LUNES A SÁBADO">LUNES A SÁBADO</option>
                  <option value="LUNES A SÁBADO">. . .</option>
                </select>
            </div>
            <div class="col-md-4 form-inline">
              <label for="validationDefault03" class="form-label">HORARIO</label>
              <input class="form-control" type="time" name="HorarioStart" style="width: 30%;"><p>A</p>
              <input class="form-control" type="time" name="HorarioEnd" style="width: 30%;">
            </div>
            <div class="col-md-9 form-inline top-space">
                <label class="form-label" for="start">LUGAR Y FORMA Y NÚMERO DE REGISTRO: </label>
                <input class="form-control" type="text" id="" name="LugarFormNoRg" style="width: 100%;">
            </div>
            <div class="col-md-3 form-inline top-space" style="justify-content: space-around;">
                <label class="form-label" for="start">N.S.</label>
                <input class="form-control" type="text" id="" name="NS" style="width: 50%;">
            </div>
        </section>

        <div class="col-12" style="margin:2.5rem 0; display: flex;justify-content: center;">
          <input class="btn btn-primary" style="width:10rem;" id="send" name="send" type="submit" value="Enviar"><br>
        </div>
    </form>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--<script src="/assets/JS/directorio.js"></script>-->  
   <script src="../assets/JS/inf.js"></script>
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
    
    
    $sendData = "INSERT INTO `$Dependencia` (`Folio`, `FechaInit`, `FechaFin`, `NombreE`, `RFC`, `TipoContrato`, `SS`, `Adscrito`, `CondicionesGrTrabajo`, `LeyFederalTrabajadores`, `FechaIngreso`, `DiasLabora`, `HorarioStart`, `HorarioEnd`, `LugarFormNoRg`, `NS`, `Observaciones`) VALUES
            ('$Folio','$FechaInit', '$FechaFin','$NombreE', '$RFC', '$TipoContrato','$SS','$Adscrito', '$CondicionesGrTrabajo', '$LeyFederalTrabajadores', '$FechaIngreso', '$DiasLabora', '$HorarioStart', '$HorarioEnd', '$LugarFormNoRg', '$NS', '$Observaciones')";

    
   /* PODRIA REDUCIR LA CANTIDAD DE CODIGO
    INVESTIGAR COMO CAMBIAR EL VALUE DE UN SELECT CON JS E INNERHTML  LESTO
    */
    $dataInsert = mysqli_query($conexion, $sendData);

    /*
     switch ($Dependencia) {
        case "DEJC":
            $sendData3 = "INSERT INTO `DEJC` (`Folio`, `FechaInit`, `FechaFin`, `NombreE`, `RFC`, `TipoContrato`, `SS`, `Adscrito`, `CondicionesGrTrabajo`, `LeyFederalTrabajadores`, `FechaIngreso`, `DiasLabora`, `HorarioStart`, `HorarioEnd`, `LugarFormNoRg`, `NS`, `Observaciones`) VALUES
            ('21','$FechaInit', '$FechaFin','$NombreE', '$RFC', '$TipoContrato','$SS','$Adscrito', '$CondicionesGrTrabajo', '$LeyFederalTrabajadores', '$FechaIngreso', '$DiasLabora', '$HorarioStart', '$HorarioEnd', '$LugarFormNoRg', '$NS', '$Observaciones')";

            $dataInsert = mysqli_query($conexion, $sendData3);

            
            
            
            break;
        case "DGRPPC":
            $sendData2 = "INSERT INTO `DGRPPC` (`Folio`, `FechaInit`, `FechaFin`, `NombreE`, `RFC`, `TipoContrato`, `SS`, `Adscrito`, `CondicionesGrTrabajo`, `LeyFederalTrabajadores`, `FechaIngreso`, `DiasLabora`, `HorarioStart`, `HorarioEnd`, `LugarFormNoRg`, `NS`, `Observaciones`) VALUES
            ('27','$FechaInit', '$FechaFin','$NombreE', '$RFC', '$TipoContrato','$SS','$Adscrito', '$CondicionesGrTrabajo', '$LeyFederalTrabajadores', '$FechaIngreso', '$DiasLabora', '$HorarioStart', '$HorarioEnd', '$LugarFormNoRg', '$NS', '$Observaciones')";
           // $dataInsert2 = mysqli_query($conexion, $sendData2);
            break;
        case "DGRT":
            $sendData4 = "INSERT INTO `DGRT` (`Folio`, `FechaInit`, `FechaFin`, `NombreE`, `RFC`, `TipoContrato`, `SS`, `Adscrito`, `CondicionesGrTrabajo`, `LeyFederalTrabajadores`, `FechaIngreso`, `DiasLabora`, `HorarioStart`, `HorarioEnd`, `LugarFormNoRg`, `NS`, `Observaciones`) VALUES
            ('37','$FechaInit', '$FechaFin','$NombreE', '$RFC', '$TipoContrato','$SS','$Adscrito', '$CondicionesGrTrabajo', '$LeyFederalTrabajadores', '$FechaIngreso', '$DiasLabora', '$HorarioStart', '$HorarioEnd', '$LugarFormNoRg', '$NS', '$Observaciones')";
//$dataInsert = mysqli_query($conexion, $sendData4);
            break;
        case "DGJEL":
            $sendData5 = "INSERT INTO `DGJEL` (`Folio`, `FechaInit`, `FechaFin`, `NombreE`, `RFC`, `TipoContrato`, `SS`, `Adscrito`, `CondicionesGrTrabajo`, `LeyFederalTrabajadores`, `FechaIngreso`, `DiasLabora`, `HorarioStart`, `HorarioEnd`, `LugarFormNoRg`, `NS`, `Observaciones`) VALUES
            ('38','$FechaInit', '$FechaFin','$NombreE', '$RFC', '$TipoContrato','$SS','$Adscrito', '$CondicionesGrTrabajo', '$LeyFederalTrabajadores', '$FechaIngreso', '$DiasLabora', '$HorarioStart', '$HorarioEnd', '$LugarFormNoRg', '$NS', '$Observaciones')";
           // $dataInsert = mysqli_query($conexion, $sendData5);
            break;
        case "DGSL":
            $sendData5 = "INSERT INTO `DGSL` (`Folio`, `FechaInit`, `FechaFin`, `NombreE`, `RFC`, `TipoContrato`, `SS`, `Adscrito`, `CondicionesGrTrabajo`, `LeyFederalTrabajadores`, `FechaIngreso`, `DiasLabora`, `HorarioStart`, `HorarioEnd`, `LugarFormNoRg`, `NS`, `Observaciones`) VALUES
            ('39','$FechaInit', '$FechaFin','$NombreE', '$RFC', '$TipoContrato','$SS','$Adscrito', '$CondicionesGrTrabajo', '$LeyFederalTrabajadores', '$FechaIngreso', '$DiasLabora', '$HorarioStart', '$HorarioEnd', '$LugarFormNoRg', '$NS', '$Observaciones')";
           // $dataInsert = mysqli_query($conexion, $sendData5);
            break;
        case "DGRC":
            $sendData6 = "INSERT INTO `DGRC` (`Folio`, `FechaInit`, `FechaFin`, `NombreE`, `RFC`, `TipoContrato`, `SS`, `Adscrito`, `CondicionesGrTrabajo`, `LeyFederalTrabajadores`, `FechaIngreso`, `DiasLabora`, `HorarioStart`, `HorarioEnd`, `LugarFormNoRg`, `NS`, `Observaciones`) VALUES
            ('119','$FechaInit', '$FechaFin','$NombreE', '$RFC', '$TipoContrato','$SS','$Adscrito', '$CondicionesGrTrabajo', '$LeyFederalTrabajadores', '$FechaIngreso', '$DiasLabora', '$HorarioStart', '$HorarioEnd', '$LugarFormNoRg', '$NS', '$Observaciones')";
          //  $dataInsert = mysqli_query($conexion, $sendData6);
            break;
    }
*/
    $folioNumber = "SELECT CONCAT( Folio, ID_Folio ) AS Result FROM $Dependencia WHERE RFC='$RFC' AND CondicionesGrTrabajo = '$CondicionesGrTrabajo' OR LeyFederalTrabajadores = '$LeyFederalTrabajadores'";
            $infoQuery= mysqli_query($conexion, $folioNumber);
                while ($show_info = mysqli_fetch_array($infoQuery)){
                   echo $show_info['Result'];
                   echo '<h6>'.$show_info['Result'].'</h6>';
  
                }
    }
?>
