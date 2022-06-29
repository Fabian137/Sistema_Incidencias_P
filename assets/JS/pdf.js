function loadImage(url) {
    return new Promise(resolve => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = "blob";
        xhr.onload = function (e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const res = event.target.result;
                resolve(res);
            }
            const file = this.response;
            reader.readAsDataURL(file);
        }
        xhr.send();
    });
}

window.addEventListener('load', async () => {

    //const form = document.querySelector('#formc');
   const form = document.getElementById('formPend');
   form.addEventListener('submit', (e) => {
       e.preventDefault();

       var folio = document.getElementById('folio').textContent;
       var nombre = document.getElementById('nombre').textContent;
       var rfc =   document.getElementById('rfc').textContent;
       var fecha =  document.getElementById('fecha').textContent;
       var tipoContrato =   document.getElementById('tipoContrato').textContent;
       var ss = document.getElementById('ss').textContent;
       var adscrito = document.getElementById('adscrito').textContent;
       var CondicionesTrabajo = document.getElementById('CondicionesTrabajo').textContent;
       var LeyFederal = document.getElementById('LeyFederal').textContent;
       var FechaIngreso = document.getElementById('FechaIngreso').textContent;
       var Horarios = document.getElementById('Horarios').textContent;
       var Observaciones = document.getElementById('Observaciones').textContent;
       var Place = document.getElementById('Place').textContent;
       var DiasLabora = document.getElementById('DiasLabora').textContent;
       var NS = document.getElementById('NS').textContent;

       generatePDF(folio, nombre, rfc, fecha, tipoContrato, CondicionesTrabajo, LeyFederal, FechaIngreso, Horarios, ss, Observaciones, NS, adscrito, Place, DiasLabora);
   })

});

var ConGrTra = [
    "OMISIÓN DE ENTRADA",
    "OMISIÓN DE SALIDA",
    "OMISIÓN TOTAL",
    "ATÍCULO 70 FRACC. I",
    "ATÍCULO 70 FRACC. II",
    "ATÍCULO 70 FRACC. VI",
    
    "ATÍCULO 58",
    "ATÍCULO 72",
    "ATÍCULO 97 (FRACC. I, II, III, V)",

    "ATÍCULO 87",
    "ATÍCULO 88",
    "ATÍCULO 89",
    "ATÍCULO 91 (LICENCIA MATERNIDAD)",
    "ATÍCULO 91 (CUIDADOS MATERNOS)",
    "ATÍCULO 92 JUBILACIÓN",
    "ATÍCULO 127 NOTA BUENA",

    "ATÍCULO 59",
    "ATÍCULO 66",

    "ATÍCULO 93 FRACC. (I, II)",

    "1er. PERIODO 2022",
    "2do. PERIODO 2022",
    "3er. PERIODO 2022 Dictamen comisión mixta",
    "PREMIO RETRIBUIDO MATERNIDAD",
    "PATERNIDAD RESPONSABLE"
];

var LeyFedTrasSerEs =[
    "OMISIÓN DE ENTRADA",
    "OMISIÓN DE SALIDA",
    "OMISIÓN TOTAL",
    "ARTÍCULO 43 FRACC. VIII",
    
    "B",
    "E",
    
    "1er. PERIODO 2022",
    "2do. PERIODO 2022",
    "2er. PERIODO 2022",
    "ESTIMULOS Y RECOMPENSAS",
    
    "PROGRAMA PERMISO RETRIBUIDO MATERNIDAD",
    "PATERNIDAD RESPONSABLE"
];

async function generatePDF(folio, nombre, rfc, fecha, tipoContrato, CondicionesTrabajo, LeyFederal, FechaIngreso, Horarios, ss, Observaciones, NS, adscrito, Place, DiasLabora) {
    const plantillaIMG = await loadImage("../assets/img/INCIDENCIA12022.jpg");

    const pdf = new jsPDF('p', 'pt', 'letter');
    pdf.addImage(plantillaIMG, 'PNG', 25, 0, 565, 792);
    
    pdf.setFontSize(8);

    pdf.text(folio, 510, 50);
    pdf.text(rfc, 103, 163);
    pdf.text(fecha, 340, 134);
    pdf.text(tipoContrato, 340, 163);
    pdf.text(ss, 500, 163);
    pdf.text(nombre, 340, 147);
    pdf.text(adscrito, 137, 178);

    //  pdf.text(CondicionesTrabajo, 160, 128);
    
    pdf.text(LeyFederal, 497, 557);
    switch(CondicionesTrabajo){
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        /*
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        v
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(255,0,0);
            pdf.circle(418.5, 297, 4, 'F');
        break;*/
    }

    pdf.text(Observaciones, 170, 498);
    pdf.text(FechaIngreso, 170, 520);
    pdf.text(Horarios, 465, 520);
    pdf.text(DiasLabora, 300, 520);
    pdf.text(Place, 250, 549);
    pdf.text(NS, 500, 565);
    //pdf.text(area, 80, 178);
   // pdf.text(hour, 422, 199);
    
    pdf.setFillColor(0,0,0);
    pdf.save("IncidenciasF.pdf");

}
console.log(ConGrTra[22]);