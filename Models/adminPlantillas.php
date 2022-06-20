<?php

function infoDependencia($info){

    echo '<h6>NOMBRE:'. $info['NombreE'] .'</h6>';
echo    '<section class="contenedor row">';
    echo        '<h6>FOLIO:'. $info['Folio'].' '. $info['ID_folio'].'</h6>';
    echo        '<h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>';
    echo        '<p>SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL:  DEL '. $info['FechaInit'].' AL '. $info['FechaFin'].'</p>';
    echo        '<br>';
    echo        '<p>RESPECTO DEL (A)C. '.$info['NombreE'].'</p>';

    echo        '<p class="col-md-4">RFC: '. $info['RFC'].'</p>';
    echo        '<p class="col-md-4">TIPO DE CONTRATO-No. DE EMPLEADO(A): '.$info['TipoContrato'].'</p>';
    echo        '<p class="col-md-4">SEC. SIN.'.$info['SS'].'</p>';

    echo        '<p class="col-md-4">ADSCRITO(A) A: '. $info['Adscrito'].'</p>';
    echo    '<hr>';
    echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
    echo        '<p class="col-md-12"> '. $info['CondicionesGrTrabajo'] .'</p>';
    echo    '<hr>';
    echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
    echo        '<p class="col-md-12"> '. $info['LeyFederalTrabajadores'].'</p>';
    echo    '<hr>';
    echo        '<p class="col-md-4">FECHA DE INGRESO: '. $info['FechaIngreso'] .'</p>';
    echo        '<p class="col-md-4">DÍAS QUE LABORA: '. $info['DiasLabora'] .'</p>';
    echo        '<p class="col-md-4">HORARIO: '. $info['HorarioStart'].' A '. $info['HorarioEnd'] .'</p>';
    echo        '<p class="col-md-12">LUGAR FORMA Y NÚMERO DE REGISTRO</p>';
    echo        '<p class="col-md-12">N.S.</p>';
    echo    '</section>';
}

    ?>