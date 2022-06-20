<?php

function infoDependencia($info){

    echo    '<section class="contenedor row" style="margin: 2rem 20%;">';
    echo '<h6>NOMBRE:<samp style="font-weight: bolder;">'. $info['NombreE'] .'</samp></h6>';
    echo        '<h6>FOLIO:'. $info['Folio'].' '. $info['ID_folio'].'</h6>';
    echo        '<h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>';
    echo        '<p>SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL:  DEL <samp style="font-weight: bolder;"> '. $info['FechaInit'].' AL '. $info['FechaFin'].'</samp></p>';
    echo        '<br>';
    echo        '<p>RESPECTO DEL (A)C.<samp style="font-weight: bolder;"> <samp style="font-weight: bolder;">'.$info['NombreE'].'</p>';

    echo        '<p class="col-md-4">RFC:<samp style="font-weight: bolder;"> '. $info['RFC'].'</samp></p>';
    echo        '<p class="col-md-6">TIPO DE CONTRATO-No. DE EMPLEADO(A):<samp style="font-weight: bolder;"> '.$info['TipoContrato'].'</samp></p>';
    echo        '<p class="col-md-3">SEC. SIN.<samp style="font-weight: bolder;">'.$info['SS'].'</samp></p>';

    echo        '<p class="col-md-4">ADSCRITO(A) A: <samp style="font-weight: bolder;">'. $info['Adscrito'].'</samp></p>';
    echo    '<hr>';
    echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
    echo        '<p class="col-md-12"> <samp style="font-weight: bolder;">'. $info['CondicionesGrTrabajo'] .'</samp></p>';
    echo    '<hr>';
    echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
    echo        '<p class="col-md-12"><samp style="font-weight: bolder;"> '. $info['LeyFederalTrabajadores'].'</samp></p>';
    echo    '<hr>';
    echo        '<p class="col-md-4">FECHA DE INGRESO: <samp style="font-weight: bolder;">'. $info['FechaIngreso'] .'</samp></p>';
    echo        '<p class="col-md-4">DÍAS QUE LABORA: <samp style="font-weight: bolder;">'. $info['DiasLabora'] .'</samp></p>';
    echo        '<p class="col-md-4">HORARIO: <samp style="font-weight: bolder;">'. $info['HorarioStart'].' A '. $info['HorarioEnd'] .'</samp></p>';
    echo        '<p class="col-md-12">LUGAR FORMA Y NÚMERO DE REGISTRO:  <samp style="font-weight: bolder;"> '. $info['Observaciones'] .'</samp></p>';
    echo        '<p class="col-md-12">N.S.  <samp style="font-weight: bolder;"> '. $info['NS'] .'</samp></p>';
    echo    '</section>';
}

    ?>