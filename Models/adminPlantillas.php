<?php

function infoDependencia($info){

    echo    '<section class="contenedor row" style="margin: 2rem 20%;">';
    echo '<h6>NOMBRE:<samp style="font-weight: bolder;" id="nombre">'. $info['NombreE'] .'</samp></h6>';
    echo        '<h6>FOLIO:<span id="folio">'. $info['Folio'].' '. $info['ID_folio'].'</span></h6>';
    echo        '<h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>';
    echo        '<p>SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL:  DEL <samp style="font-weight: bolder;" id="fecha"> '. $info['FechaInit'].' AL '. $info['FechaFin'].'</samp></p>';
    echo        '<br>';
    echo        '<p>RESPECTO DEL (A)C.<samp style="font-weight: bolder;"> <samp style="font-weight: bolder;">'.$info['NombreE'].'</p>';

    echo        '<p class="col-md-4">RFC:<samp style="font-weight: bolder;" id="rfc"> '. $info['RFC'].'</samp></p>';
    echo        '<p class="col-md-6">TIPO DE CONTRATO-No. DE EMPLEADO(A):<samp style="font-weight: bolder;" id="tipoContrato"> '.$info['TipoContrato'].'</samp></p>';
    echo        '<p class="col-md-3">SEC. SIN.<samp style="font-weight: bolder;" id="ss">'.$info['SS'].'</samp></p>';

    echo        '<p class="col-md-4">ADSCRITO(A) A: <samp style="font-weight: bolder;" id="adscrito">'. $info['Adscrito'].'</samp></p>';
    echo    '<hr>';
    echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
    echo        '<p class="col-md-12"> <samp style="font-weight: bolder;" id="CondicionesTrabajo">'. $info['CondicionesGrTrabajo'] .'</samp></p>';
    echo    '<hr>';
    echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
    echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal"> '. $info['LeyFederalTrabajadores'].'</samp></p>';
    echo    '<hr>';
    echo        '<p class="col-md-12">OBSERVACIONES: <samp style="font-weight: bolder;" id="Observaciones">'. $info['Observaciones'] .'</samp></p>';
    echo        '<p class="col-md-4">FECHA DE INGRESO: <samp style="font-weight: bolder;" id="FechaIngreso">'. $info['FechaIngreso'] .'</samp></p>';
    echo        '<p class="col-md-4">DÍAS QUE LABORA: <samp style="font-weight: bolder;" id="DiasLabora">'. $info['DiasLabora'] .'</samp></p>';
    echo        '<p class="col-md-4">HORARIO: <samp style="font-weight: bolder;" id="Horarios">'. $info['HorarioStart'].' A '. $info['HorarioEnd'] .'</samp></p>';
    echo        '<p class="col-md-12">LUGAR FORMA Y NÚMERO DE REGISTRO:  <samp style="font-weight: bolder;" id="Place"> '. $info['LugarFormNoRg'] .'</samp></p>';
    echo        '<p class="col-md-12">N.S.  <samp style="font-weight: bolder;" id="NS"> '. $info['NS'] .'</samp></p>';
    echo    '</section>';
    
    echo    '<div class="center" style="margin: 2rem 20%;"><button type="submit" class="btn btn-primary mb-4">Generar PDF</button></div>';

    
}


function FolioObtener(){
    $folioNumber = "SELECT CONCAT( Folio, ID_Folio ) AS Result FROM $Dependencia WHERE RFC='$RFC' AND CondicionesGrTrabajo = '$CondicionesGrTrabajo' OR LeyFederalTrabajadores = '$LeyFederalTrabajadores'";
    $infoQuery= mysqli_query($conexion, $folioNumber);
        while ($show_info = mysqli_fetch_array($infoQuery)){
           echo '<h6 id="numberFolio">Número de folio: '.$show_info['Result'].'</h6>';
        }
}

function ModalInvocation($show_info){
    echo '    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">';
    echo '  <div class="modal-dialog">';
    echo '    <div class="modal-content">';
    echo '      <div class="modal-header">';
    echo '        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>';
    echo '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
    echo '      </div>';
    echo '      <div class="modal-body">';
    
    echo '<h6 id="numberFolio">Número de folio: '.$show_info['Result'].'</h6>';

    echo '      </div>';
    echo '      <div class="modal-footer">';
    echo '          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
    echo '          <button type="button" class="btn btn-primary">Understood</button>';
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
}
    ?>