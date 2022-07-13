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
    <a href="adminConsultas.php" class="btnexit" style="text-decoration: none;">Folio</a>
    </button>
    </section>

    <form class="contenedor row g-4 center" action="nameSearch.php" method="post" autocomplete="off">
        <div class="col-md-6 contenedor" style="margin: 2rem 0rem; text-align: center;">
            <h6 for="validationDefault04" class="form-label" style="margin:1.5rem 0;">NOMBRE</h6>
            <div class="contenedor">
                
            <select class="form-select right-space" name="Dependencia" id="Folio" style="width: 100%;">
                    <option value="DEJC">DEJC</option>
                    <option value="DGRPPC">DGRPPC</option>
                    <option value="DGRT">DGRT</option>
                    <option value="DGJEL">DGJEL</option>
                    <option value="DGSL">DGSL</option>
                    <option value="DGRC">DGRC</option>
                </select>
            <input class="form-control" type="text" id="" placeholder="Ingrese el nombre" name="Nombre" style="width:100%; margin-top:1rem;">
        </div>
        </div>
    
        <div class="col-12" style="display: flex;justify-content: center;">
            <input class="btn btn-primary" style="width:10rem;" name="consultBName" type="submit" value="Consultar"><br>
        </div>
        </form>
        <form class="contenedor row g-4 center" action="" method="post" id="formPend" autocomplete="off">
        <?php
        if($_POST['consultBName']){
            $Dependencia = $_POST["Dependencia"];
            $Name = $_POST["Nombre"];

            $QueryByName = "SELECT * FROM $Dependencia WHERE NombreE = '$Name'";
            $infoQueryName= mysqli_query($conexion, $QueryByName);
            while ($show_info = mysqli_fetch_array($infoQueryName)){
                echo $show_info['NombreE'];
                echo $show_info['TipoContrato'];
            }

            
         }
         ?>
         <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
      
      <section class="row" style="margin: 1.5rem 9%;"><h6>NOMBRE:<samp style="font-weight: bolder;" id="nombre"> FABIÁN BELTRÁN ISIDRO </samp></h6><h6>FOLIO:<span id="folio"> 1196</span></h6><h6 id="dependencia"> DGRC</h6><h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6><p>SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL:  DEL <samp style="font-weight: bolder;" id="fecha"> 2022-07-10 AL 2022-07-13</samp></p><br><p>RESPECTO DEL (A)C.<samp style="font-weight: bolder;"> <samp style="font-weight: bolder;">FABIÁN BELTRÁN ISIDRO </samp></samp></p><p class="col-md-4">RFC:<samp style="font-weight: bolder;" id="rfc"> BEIC040116HDFLSRA7 </samp></p><p class="col-md-6">TIPO DE CONTRATO-No. DE EMPLEADO(A):<samp style="font-weight: bolder;" id="tipoContrato"> Base</samp></p><p class="col-md-3">SEC. SIN.<samp style="font-weight: bolder;" id="ss">8</samp></p><p class="col-md-4">ADSCRITO(A) A: <samp style="font-weight: bolder;" id="adscrito">DGAF</samp></p><hr><h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6><p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo"></samp></p><hr><h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6><p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal">ESTIMULOS Y RECOMPENSAS</samp></p><hr><p class="col-md-12">OBSERVACIONES: <samp style="font-weight: bolder;" id="Observaciones">Mamadas plox</samp></p><p class="col-md-4">FECHA DE INGRESO: <samp style="font-weight: bolder;" id="FechaIngreso">2021-07-31</samp></p><p class="col-md-4">DÍAS QUE LABORA: <samp style="font-weight: bolder;" id="DiasLabora">LUNES A VIERNES</samp></p><p class="col-md-4">HORARIO: <samp style="font-weight: bolder;" id="Horarios">21:45:00 A 15:13:00</samp></p><p class="col-md-12">LUGAR FORMA Y NÚMERO DE REGISTRO:  <samp style="font-weight: bolder;" id="Place"> MI LUGAR</samp></p><p class="col-md-12">N.S.  <samp style="font-weight: bolder;" id="NS"> 8</samp></p></section>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</form>

    
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