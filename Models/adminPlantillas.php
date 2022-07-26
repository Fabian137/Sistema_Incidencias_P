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

    echo    '<div class="center"><button class="btn btn-primary mb-4" name="btnPDF" value="'.$info['Folio'].''. $info['ID_folio'].'">Generar PDF</button></div>';

    
}

function validation($info){
   // echo '<form action="" method="post" id="FormAdmin'.$info['Folio'].''. $info['ID_folio'].'" autocomplete="off">';

    echo    '<section class="row" style="margin: 1.5rem 9%;">';
    echo '<h6>NOMBRE: <samp style="font-weight: bolder;" id="N'. $info['Folio'].''. $info['ID_folio'].'">'. $info['NombreE'] .'</samp></h6>';
    echo '<div class="row justify-content-between">';
    echo '  <div class="col-4">';
    echo        '<h6>FOLIO:<span id="F'. $info['Folio'].''. $info['ID_folio'].'"> '. $info['Folio'].''. $info['ID_folio'].'</span></h6>';   
    echo '    </div>';
    echo '    <div class="col-3">';
    /*-- Button trigger modal --*/
    echo '<button onclick="infoValidation('. $info['Folio'].''. $info['ID_folio'].')" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    VALIDAR
  </button>';
    echo '    </div>';
    echo '</div>';
    echo        '<h6 id="D'. $info['Folio'].''. $info['ID_folio'].'"> '. $info['Dependencia'].'</h6>';
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
    //echo '</form>';
}

function validationDone($info){
    echo '<form action="" method="post" id="FormAdmin'.$info['Folio'].''. $info['ID_folio'].'" autocomplete="off">';

    echo    '<section class="row" style="margin: 1.5rem 9%;">';
    echo '<h6>NOMBRE:<samp style="font-weight: bolder;" id="nombre'. $info['Folio'].''. $info['ID_folio'].'"> '. $info['NombreE'] .'</samp></h6>';
    echo '<div class="row justify-content-between">';
    echo '  <div class="col-4">';
    echo        '<h6>FOLIO:<span id="F'. $info['Folio'].''. $info['ID_folio'].'"> '. $info['Folio'].''. $info['ID_folio'].'</span></h6>';   
    echo '    </div>';
    echo '    <div class="col-3">';
    if($show_info['Validation']){ echo '<h6>Validado por: '.$info['Validation'].'</h6>';}
    echo '    </div>';
    echo '</div>';
    echo        '<h6 id="D'. $info['Folio'].''. $info['ID_folio'].'"> '. $info['Dependencia'].'</h6>';
    echo        '<h6 class="top-space center">DOCUMENTO MÚLTIPLE DE INCIDENCIAS</h6>';
    echo        '<p>SOLICITO SE TRAMITE LO SEÑALADO A CONTINUACIÓN, CORRESPONDIENTE AL:  DEL <samp style="font-weight: bolder;" id="fecha'. $info['Folio'].''. $info['ID_folio'].'"> '. $info['FechaInit'].' AL '. $info['FechaFin'].'</samp></p>';
    echo        '<br>';
    echo        '<p>RESPECTO DEL (A)C.<samp style="font-weight: bolder;"> <samp style="font-weight: bolder;">'.$info['NombreE'].'</p>';

    echo        '<p class="col-md-4">RFC:<samp style="font-weight: bolder;" id="rfc'.$info['Folio'].''. $info['ID_folio'].'"> '. $info['RFC'].'</samp></p>';
    echo        '<p class="col-md-6">TIPO DE CONTRATO-No. DE EMPLEADO(A):<samp style="font-weight: bolder;" id="tipoContrato'.$info['Folio'].''. $info['ID_folio'].'"> '.$info['TipoContrato'].'</samp></p>';
    echo        '<p class="col-md-3">SEC. SIN.<samp style="font-weight: bolder;" id="ss'.$info['Folio'].''. $info['ID_folio'].'">'.$info['SS'].'</samp></p>';

    echo        '<p class="col-md-4">ADSCRITO(A) A: <samp style="font-weight: bolder;" id="adscrito'.$info['Folio'].''. $info['ID_folio'].'">'. $info['Adscrito'].'</samp></p>';
    echo    '<hr>';
    $incidencia = $info['CondicionesGrTrabajo'];
    $ValueIncidencia = str_split($incidencia, 3);
    
    if($ValueIncidencia[0] == 'LEY'){
        echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
        echo        '<p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo'.$info['Folio'].''. $info['ID_folio'].'"></samp></p>';
        echo    '<hr>';
        echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
        echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal'.$info['Folio'].''. $info['ID_folio'].'">'. $ValueIncidencia[1].''. $ValueIncidencia[2].''. $ValueIncidencia[3].''. $ValueIncidencia[4].''. $ValueIncidencia[5].''. $ValueIncidencia[6].''. $ValueIncidencia[7].''. $ValueIncidencia[8].''. $ValueIncidencia[9].''. $ValueIncidencia[10].''. $ValueIncidencia[11].''. $ValueIncidencia[12].''. $ValueIncidencia[13].'</samp></p>';
        echo    '<hr>';
    }
    else if($ValueIncidencia[0] !== 'LEY'){
        echo        '<h6 class="center">CONDICIONES GENERALES DEL TRABAJO DEL G.D.F.</h6>';
    echo        '<p class="col-md-12 "> <samp style="font-weight: bolder;" id="CondicionesTrabajo'.$info['Folio'].''. $info['ID_folio'].'">'. $incidencia .'</samp></p>';
    echo    '<hr>';

    echo        '<h6 class="center">LEY FEDERAL DE LOS TRABAJADORES AL SERVICIO DEL ESTADO</h6>';
        echo        '<p class="col-md-12"><samp style="font-weight: bolder;" id="LeyFederal'.$info['Folio'].''. $info['ID_folio'].'"> </samp></p>';
        echo    '<hr>';
    }
    echo        '<p class="col-md-12">OBSERVACIONES: <samp style="font-weight: bolder;" id="Observaciones'.$info['Folio'].''. $info['ID_folio'].'">'. $info['Observaciones'] .'</samp></p>';
    echo        '<p class="col-md-4">FECHA DE INGRESO: <samp style="font-weight: bolder;" id="FechaIngreso'.$info['Folio'].''. $info['ID_folio'].'">'. $info['FechaIngreso'] .'</samp></p>';
    echo        '<p class="col-md-4">DÍAS QUE LABORA: <samp style="font-weight: bolder;" id="DiasLabora'.$info['Folio'].''. $info['ID_folio'].'">'. $info['DiasLabora'] .'</samp></p>';
    echo        '<p class="col-md-4">HORARIO: <samp style="font-weight: bolder;" id="Horarios'.$info['Folio'].''. $info['ID_folio'].'">'. $info['HorarioStart'].' A '. $info['HorarioEnd'] .'</samp></p>';
    echo        '<p class="col-md-12">LUGAR FORMA Y NÚMERO DE REGISTRO:  <samp style="font-weight: bolder;" id="Place'.$info['Folio'].''. $info['ID_folio'].'"> '. $info['LugarFormNoRg'] .'</samp></p>';
    echo        '<p class="col-md-12">N.S.  <samp style="font-weight: bolder;" id="NS'.$info['Folio'].''. $info['ID_folio'].'"> '. $info['NS'] .'</samp></p>';
    echo    '</section>';
    
    echo    '<div class="center"><button class="btn btn-primary mb-4" name="btnPDF" value="'.$info['Folio'].''. $info['ID_folio'].'">Generar PDF</button></div>';

    echo '</form>';

}

function modalValidation($name){
    echo '<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">';
    echo '<div class="modal-dialog">';
    echo '<div class="modal-content">';
    echo '  <div class="modal-header">';
    echo '    <h5 class="modal-title" id="staticBackdropLabel"></h5>';
    echo '    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
    echo '  </div>';
    echo '  <div class="modal-body">';
    echo '    <form action="'.$name.'" method="post" autocomplete="off" id="validationForm" name="validationForm">';
    echo '      <input style="display:none;" type="text" name="NumeroFolio" id="NumeroFolio" value="">';
    echo '      <input style="display:none;" type="text" name="Dependency" id="Dependency" value="">';
    echo '      <input style="display:none;" type="text" name="Nombre" id="Nombre" value="">';
    echo '        <div class="center">';
    echo '            <div class="col-10" style="margin: 5% 0;">';
    echo '                <label class="form-label">Nombre de quien valida la incidencia</label>';
    echo '        <div class="input-group">';
    echo '        <div class="input-group-text"><img class="login-img" src="../assets/img/user.svg" alt="user icon"></div>';
    echo '        <input type="text" class="form-control" placeholder="Ingrese el nombre" name="Validation" required>';
    echo '        </div>';
    echo '        </div>';
    echo '        </div>';
    echo    '<div class="center"><input class="btn btn-primary" style="width:10rem;" name="validar" type="submit" value="Validar"></div>';

    echo '    </form>';
    echo '  </div>';
    echo '  <div class="modal-footer">';
    echo '  </div>';
    echo '</div>';
    echo '  </div>';
    echo '</div>';
}

