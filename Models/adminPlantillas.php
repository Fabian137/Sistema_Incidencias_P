<?php

function infoDependencia($info){

    echo    '<section class="row" style="margin: 1.5rem 9%;">';
    echo '<h6>NOMBRE:<samp style="font-weight: bolder;" id="nombre"> '. $info['NombreE'] .'</samp></h6>';
    echo        '<h6>FOLIO:<span id="folio"> '. $info['Folio'].''. $info['ID_folio'].'</span></h6>';
    echo        '<h6 id="dependencia"> '. $info['Dependencia'].'</h6>';
    echo        '<h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>';
    echo        '<p>SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL:  DEL <samp style="font-weight: bolder;" id="fecha"> '. $info['FechaInit'].' AL '. $info['FechaFin'].'</samp></p>';
    echo        '<br>';
    echo        '<p>RESPECTO DEL (A)C.<samp style="font-weight: bolder;"> <samp style="font-weight: bolder;">'.$info['NombreE'].'</p>';

    echo        '<p class="col-md-4">RFC:<samp style="font-weight: bolder;" id="rfc"> '. $info['RFC'].'</samp></p>';
    echo        '<p class="col-md-6">TIPO DE CONTRATO-No. DE EMPLEADO(A):<samp style="font-weight: bolder;" id="tipoContrato"> '.$info['TipoContrato'].'</samp></p>';
    echo        '<p class="col-md-3">SEC. SIN.<samp style="font-weight: bolder;" id="ss">'.$info['SS'].'</samp></p>';

    echo        '<p class="col-md-4">ADSCRITO(A) A: <samp style="font-weight: bolder;" id="adscrito">'. $info['Adscrito'].'</samp></p>';
    echo    '<hr>';
    $incidencia = $info['CondicionesGrTrabajo'];
    $ValueIncidencia = str_split($incidencia, 3);
    
    if($ValueIncidencia[0] == 'LEY'){
        echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
        echo        '<p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo"></samp></p>';
        echo    '<hr>';
        echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
        echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal">'. $ValueIncidencia[1].''. $ValueIncidencia[2].''. $ValueIncidencia[3].''. $ValueIncidencia[4].''. $ValueIncidencia[5].''. $ValueIncidencia[6].''. $ValueIncidencia[7].''. $ValueIncidencia[8].''. $ValueIncidencia[9].''. $ValueIncidencia[10].''. $ValueIncidencia[11].''. $ValueIncidencia[12].''. $ValueIncidencia[13].'</samp></p>';
        echo    '<hr>';
    }
    else if($ValueIncidencia[0] !== 'LEY'){
        echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
    echo        '<p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo">'. $incidencia .'</samp></p>';
    echo    '<hr>';

    echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
        echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal"> </samp></p>';
        echo    '<hr>';
    }
    echo        '<p class="col-md-12">OBSERVACIONES: <samp style="font-weight: bolder;" id="Observaciones">'. $info['Observaciones'] .'</samp></p>';
    echo        '<p class="col-md-4">FECHA DE INGRESO: <samp style="font-weight: bolder;" id="FechaIngreso">'. $info['FechaIngreso'] .'</samp></p>';
    echo        '<p class="col-md-4">DÍAS QUE LABORA: <samp style="font-weight: bolder;" id="DiasLabora">'. $info['DiasLabora'] .'</samp></p>';
    echo        '<p class="col-md-4">HORARIO: <samp style="font-weight: bolder;" id="Horarios">'. $info['HorarioStart'].' A '. $info['HorarioEnd'] .'</samp></p>';
    echo        '<p class="col-md-12">LUGAR FORMA Y NÚMERO DE REGISTRO:  <samp style="font-weight: bolder;" id="Place"> '. $info['LugarFormNoRg'] .'</samp></p>';
    echo        '<p class="col-md-12">N.S.  <samp style="font-weight: bolder;" id="NS"> '. $info['NS'] .'</samp></p>';
    echo    '</section>';
    
    echo    '<div class="center"><button type="submit" class="btn btn-primary mb-4">Generar PDF</button></div>';

    
}

function searchNameInfo($info){

    echo    '<section class="row" style="margin: 1.5rem 9%;">';
    echo '<h6>NOMBRE:<samp style="font-weight: bolder;" id="nombre"> '. $info['NombreE'] .'</samp></h6>';
    echo        '<h6>FOLIO:<span id="folio"> '. $info['Folio'].''. $info['ID_folio'].'</span></h6>';
    echo        '<h6 id="dependencia"> '. $info['Dependencia'].'</h6>';
    echo        '<h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>';
    echo        '<p>SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL:  DEL <samp style="font-weight: bolder;" id="fecha"> '. $info['FechaInit'].' AL '. $info['FechaFin'].'</samp></p>';
    echo        '<br>';
    echo        '<p>RESPECTO DEL (A)C.<samp style="font-weight: bolder;"> <samp style="font-weight: bolder;">'.$info['NombreE'].'</p>';

    echo        '<p class="col-md-4">RFC:<samp style="font-weight: bolder;" id="rfc"> '. $info['RFC'].'</samp></p>';
    echo        '<p class="col-md-6">TIPO DE CONTRATO-No. DE EMPLEADO(A):<samp style="font-weight: bolder;" id="tipoContrato"> '.$info['TipoContrato'].'</samp></p>';
    echo        '<p class="col-md-3">SEC. SIN.<samp style="font-weight: bolder;" id="ss">'.$info['SS'].'</samp></p>';

    echo        '<p class="col-md-4">ADSCRITO(A) A: <samp style="font-weight: bolder;" id="adscrito">'. $info['Adscrito'].'</samp></p>';
    echo    '<hr>';
    $incidencia = $info['CondicionesGrTrabajo'];
    $ValueIncidencia = str_split($incidencia, 3);
    
    if($ValueIncidencia[0] == 'LEY'){
        echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
        echo        '<p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo"></samp></p>';
        echo    '<hr>';
        echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
        echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal">'. $ValueIncidencia[1].''. $ValueIncidencia[2].''. $ValueIncidencia[3].''. $ValueIncidencia[4].''. $ValueIncidencia[5].''. $ValueIncidencia[6].''. $ValueIncidencia[7].''. $ValueIncidencia[8].''. $ValueIncidencia[9].''. $ValueIncidencia[10].''. $ValueIncidencia[11].''. $ValueIncidencia[12].''. $ValueIncidencia[13].'</samp></p>';
        echo    '<hr>';
    }
    else if($ValueIncidencia[0] !== 'LEY'){
        echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
    echo        '<p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo">'. $incidencia .'</samp></p>';
    echo    '<hr>';

    echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
        echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal"> </samp></p>';
        echo    '<hr>';
    }
    echo        '<p class="col-md-12">OBSERVACIONES: <samp style="font-weight: bolder;" id="Observaciones">'. $info['Observaciones'] .'</samp></p>';
    echo        '<p class="col-md-4">FECHA DE INGRESO: <samp style="font-weight: bolder;" id="FechaIngreso">'. $info['FechaIngreso'] .'</samp></p>';
    echo        '<p class="col-md-4">DÍAS QUE LABORA: <samp style="font-weight: bolder;" id="DiasLabora">'. $info['DiasLabora'] .'</samp></p>';
    echo        '<p class="col-md-4">HORARIO: <samp style="font-weight: bolder;" id="Horarios">'. $info['HorarioStart'].' A '. $info['HorarioEnd'] .'</samp></p>';
    echo        '<p class="col-md-12">LUGAR FORMA Y NÚMERO DE REGISTRO:  <samp style="font-weight: bolder;" id="Place"> '. $info['LugarFormNoRg'] .'</samp></p>';
    echo        '<p class="col-md-12">N.S.  <samp style="font-weight: bolder;" id="NS"> '. $info['NS'] .'</samp></p>';
    echo    '</section>';
}

function validation($info){


    

    echo    '<section class="row" style="margin: 1.5rem 9%;">';
    echo '<h6>NOMBRE:<samp style="font-weight: bolder;" id="nombre"> '. $info['NombreE'] .'</samp></h6>';
    echo '<div class="row justify-content-between">';
    echo '  <div class="col-4">';
    echo        '<h6>FOLIO:<span id="folio"> '. $info['Folio'].''. $info['ID_folio'].'</span></h6>';   
    echo '    </div>';
    echo '    <div class="col-3">';
    /*-- Button trigger modal --*/
    echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    VALIDAR
  </button>';
    echo '    </div>';
    echo '</div>';
    echo        '<h6 id="dependencia"> '. $info['Dependencia'].'</h6>';
    echo        '<h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>';
    echo        '<p>SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL:  DEL <samp style="font-weight: bolder;" id="fecha"> '. $info['FechaInit'].' AL '. $info['FechaFin'].'</samp></p>';
    echo        '<br>';
    echo        '<p>RESPECTO DEL (A)C.<samp style="font-weight: bolder;"> <samp style="font-weight: bolder;">'.$info['NombreE'].'</p>';

    echo        '<p class="col-md-4">RFC:<samp style="font-weight: bolder;" id="rfc"> '. $info['RFC'].'</samp></p>';
    echo        '<p class="col-md-6">TIPO DE CONTRATO-No. DE EMPLEADO(A):<samp style="font-weight: bolder;" id="tipoContrato"> '.$info['TipoContrato'].'</samp></p>';
    echo        '<p class="col-md-3">SEC. SIN.<samp style="font-weight: bolder;" id="ss">'.$info['SS'].'</samp></p>';

    echo        '<p class="col-md-4">ADSCRITO(A) A: <samp style="font-weight: bolder;" id="adscrito">'. $info['Adscrito'].'</samp></p>';
    echo    '<hr>';
    $incidencia = $info['CondicionesGrTrabajo'];
    $ValueIncidencia = str_split($incidencia, 3);
    
    if($ValueIncidencia[0] == 'LEY'){
        echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
        echo        '<p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo"></samp></p>';
        echo    '<hr>';
        echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
        echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal">'. $ValueIncidencia[1].''. $ValueIncidencia[2].''. $ValueIncidencia[3].''. $ValueIncidencia[4].''. $ValueIncidencia[5].''. $ValueIncidencia[6].''. $ValueIncidencia[7].''. $ValueIncidencia[8].''. $ValueIncidencia[9].''. $ValueIncidencia[10].''. $ValueIncidencia[11].''. $ValueIncidencia[12].''. $ValueIncidencia[13].'</samp></p>';
        echo    '<hr>';
    }
    else if($ValueIncidencia[0] !== 'LEY'){
        echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
    echo        '<p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo">'. $incidencia .'</samp></p>';
    echo    '<hr>';

    echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
        echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal"> </samp></p>';
        echo    '<hr>';
    }
    echo        '<p class="col-md-12">OBSERVACIONES: <samp style="font-weight: bolder;" id="Observaciones">'. $info['Observaciones'] .'</samp></p>';
    echo        '<p class="col-md-4">FECHA DE INGRESO: <samp style="font-weight: bolder;" id="FechaIngreso">'. $info['FechaIngreso'] .'</samp></p>';
    echo        '<p class="col-md-4">DÍAS QUE LABORA: <samp style="font-weight: bolder;" id="DiasLabora">'. $info['DiasLabora'] .'</samp></p>';
    echo        '<p class="col-md-4">HORARIO: <samp style="font-weight: bolder;" id="Horarios">'. $info['HorarioStart'].' A '. $info['HorarioEnd'] .'</samp></p>';
    echo        '<p class="col-md-12">LUGAR FORMA Y NÚMERO DE REGISTRO:  <samp style="font-weight: bolder;" id="Place"> '. $info['LugarFormNoRg'] .'</samp></p>';
    echo        '<p class="col-md-12">N.S.  <samp style="font-weight: bolder;" id="NS"> '. $info['NS'] .'</samp></p>';
    echo    '</section>';
}

function validationDone($info){

    

    echo    '<section class="row" style="margin: 1.5rem 9%;">';
    echo '<h6>NOMBRE:<samp style="font-weight: bolder;" id="nombre"> '. $info['NombreE'] .'</samp></h6>';
    echo '<div class="row justify-content-between">';
    echo '  <div class="col-4">';
    echo        '<h6>FOLIO:<span id="folio"> '. $info['Folio'].''. $info['ID_folio'].'</span></h6>';   
    echo '    </div>';
    echo '    <div class="col-3">';
    /*-- Button trigger modal --*/
    echo '<h6>Validado por: '.$info['Validation'].'</h6>';
    echo '    </div>';
    echo '</div>';
    echo        '<h6 id="dependencia"> '. $info['Dependencia'].'</h6>';
    echo        '<h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>';
    echo        '<p>SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL:  DEL <samp style="font-weight: bolder;" id="fecha"> '. $info['FechaInit'].' AL '. $info['FechaFin'].'</samp></p>';
    echo        '<br>';
    echo        '<p>RESPECTO DEL (A)C.<samp style="font-weight: bolder;"> <samp style="font-weight: bolder;">'.$info['NombreE'].'</p>';

    echo        '<p class="col-md-4">RFC:<samp style="font-weight: bolder;" id="rfc"> '. $info['RFC'].'</samp></p>';
    echo        '<p class="col-md-6">TIPO DE CONTRATO-No. DE EMPLEADO(A):<samp style="font-weight: bolder;" id="tipoContrato"> '.$info['TipoContrato'].'</samp></p>';
    echo        '<p class="col-md-3">SEC. SIN.<samp style="font-weight: bolder;" id="ss">'.$info['SS'].'</samp></p>';

    echo        '<p class="col-md-4">ADSCRITO(A) A: <samp style="font-weight: bolder;" id="adscrito">'. $info['Adscrito'].'</samp></p>';
    echo    '<hr>';
    $incidencia = $info['CondicionesGrTrabajo'];
    $ValueIncidencia = str_split($incidencia, 3);
    
    if($ValueIncidencia[0] == 'LEY'){
        echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
        echo        '<p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo"></samp></p>';
        echo    '<hr>';
        echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
        echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal">'. $ValueIncidencia[1].''. $ValueIncidencia[2].''. $ValueIncidencia[3].''. $ValueIncidencia[4].''. $ValueIncidencia[5].''. $ValueIncidencia[6].''. $ValueIncidencia[7].''. $ValueIncidencia[8].''. $ValueIncidencia[9].''. $ValueIncidencia[10].''. $ValueIncidencia[11].''. $ValueIncidencia[12].''. $ValueIncidencia[13].'</samp></p>';
        echo    '<hr>';
    }
    else if($ValueIncidencia[0] !== 'LEY'){
        echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
    echo        '<p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo">'. $incidencia .'</samp></p>';
    echo    '<hr>';

    echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
        echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal"> </samp></p>';
        echo    '<hr>';
    }
    echo        '<p class="col-md-12">OBSERVACIONES: <samp style="font-weight: bolder;" id="Observaciones">'. $info['Observaciones'] .'</samp></p>';
    echo        '<p class="col-md-4">FECHA DE INGRESO: <samp style="font-weight: bolder;" id="FechaIngreso">'. $info['FechaIngreso'] .'</samp></p>';
    echo        '<p class="col-md-4">DÍAS QUE LABORA: <samp style="font-weight: bolder;" id="DiasLabora">'. $info['DiasLabora'] .'</samp></p>';
    echo        '<p class="col-md-4">HORARIO: <samp style="font-weight: bolder;" id="Horarios">'. $info['HorarioStart'].' A '. $info['HorarioEnd'] .'</samp></p>';
    echo        '<p class="col-md-12">LUGAR FORMA Y NÚMERO DE REGISTRO:  <samp style="font-weight: bolder;" id="Place"> '. $info['LugarFormNoRg'] .'</samp></p>';
    echo        '<p class="col-md-12">N.S.  <samp style="font-weight: bolder;" id="NS"> '. $info['NS'] .'</samp></p>';
    echo    '</section>';
}