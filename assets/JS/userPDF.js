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
   var form = document.getElementById('UserForm');
   if(form){

   
   form.addEventListener('submit', (e) => {
       e.preventDefault();

       var dependencia = document.getElementById('dependencia').textContent;
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

       generatePDF(folio, nombre, rfc, fecha, tipoContrato, CondicionesTrabajo, LeyFederal, FechaIngreso, Horarios, ss, Observaciones, NS, adscrito, Place, DiasLabora, dependencia);
   
       console.log("PRIMER CONSOLE");
    })

}

   console.log("SEGUNDO CONSOLE");
});

var ConGrTra = [
    "OMISIÓN DE ENTRADA",
    "OMISIÓN DE SALIDA",
    "OMISIÓN TOTAL",
    "ARTÍCULO 70 FRACC. I",
    "ARTÍCULO 70 FRACC. II",
    "ARTÍCULO 70 FRACC. VI",
    
    "ARTÍCULO 58",
    "ARTÍCULO 72",
    "ARTÍCULO 97 (FRACC. I, II, III, V)",

    "ARTÍCULO 87",
    "ARTÍCULO 88",
    "ARTÍCULO 89",
    "ARTÍCULO 91 (LICENCIA MATERNIDAD)",
    "ARTÍCULO 91 (CUIDADOS MATERNOS)",
    "ARTÍCULO 92 JUBILACIÓN",
    "ARTÍCULO 127 NOTA BUENA",

    "ARTÍCULO 59",
    "ARTÍCULO 66",

    "ARTÍCULO 93 FRACC. (I, II)",

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

async function generatePDF(folio, nombre, rfc, fecha, tipoContrato, CondicionesTrabajo, LeyFederal, FechaIngreso, Horarios, ss, Observaciones, NS, adscrito, Place, DiasLabora, dependencia) {

    console.log('HOLA MUMNNDO');
    const plantillaIMG = await loadImage("../assets/img/INCIDENCIA12022.jpg");

    const pdf = new jsPDF('p', 'pt', 'letter');
    pdf.addImage(plantillaIMG, 'PNG', 25, 0, 565, 792);
    
    pdf.setFontSize(8);

    let date = new Date();
    let day = String(date.getDate()).padStart(2, '0');
    let month = String(date.getMonth() + 1).padStart(2, '0');
    pdf.text(day, 470, 130);
    pdf.text(month, 505, 130);


    pdf.text(folio, 510, 50);
    pdf.text(rfc, 103, 163);
    pdf.text(fecha, 340, 134);
    pdf.text(tipoContrato, 340, 163);
    pdf.text(ss, 500, 163);
    pdf.text(nombre, 340, 147);
    pdf.text(adscrito, 137, 178);

    pdf.text(dependencia, 495, 50);

    switch(CondicionesTrabajo){
        //LEY FEDERAL
        case CondicionesTrabajo = ConGrTra[0]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 226.5, 3.5, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[1]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 236.5, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[2]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 246.5, 3.5, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[3]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 256.5, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[4]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 266.5, 3.5, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[5]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 276.5, 4, 'F');
        break;


        case CondicionesTrabajo = ConGrTra[6]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 317, 3.5, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[7]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 327.5, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[8]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 337.5, 4, 'F');
        break;

        case CondicionesTrabajo = ConGrTra[9]:
            pdf.setFillColor(120,18,56);
            pdf.circle(228.5, 227.5, 3.5, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[10]:
            pdf.setFillColor(120,18,56);
            pdf.circle(228.5, 237.5, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[11]:
            pdf.setFillColor(120,18,56);
            pdf.circle(228.5, 247.5, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[12]:
            pdf.setFillColor(120,18,56);
            pdf.circle(228.5, 257.5, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[13]:
            pdf.setFillColor(120,18,56);
            pdf.circle(228.5, 267.5, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[14]:
            pdf.setFillColor(120,18,56);
            pdf.circle(228.5, 277.5, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[15]:
            pdf.setFillColor(120,18,56);
            pdf.circle(228.5, 287.5, 4, 'F');
        break;

        case CondicionesTrabajo = ConGrTra[16]:
            pdf.setFillColor(120,18,56);
            pdf.circle(228.5, 318, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[17]:
            pdf.setFillColor(120,18,56);
            pdf.circle(228.5, 329, 4, 'F');
        break;

        case CondicionesTrabajo = ConGrTra[18]:
            pdf.setFillColor(120,18,56);
            pdf.circle(418.5, 226.5, 3.5, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[19]:
            pdf.setFillColor(120,18,56);
            pdf.circle(418.5, 257, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[20]:
            pdf.setFillColor(120,18,56);
            pdf.circle(418.5, 267, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[21]:
            pdf.setFillColor(120,18,56);
            pdf.circle(418.5, 277, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[22]:
            pdf.setFillColor(120,18,56);
            pdf.circle(418.5, 297, 4, 'F');
        break;
        case CondicionesTrabajo = ConGrTra[23]:
            pdf.setFillColor(120,18,56);
            pdf.circle(418.5, 307, 4, 'F');
        break;

    }

    switch(LeyFederal){
        case LeyFederal = LeyFedTrasSerEs[0]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 389.5, 3.5, 'F');
        break;
        case LeyFederal = LeyFedTrasSerEs[1]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 400, 4, 'F');
        break;
        case LeyFederal = LeyFedTrasSerEs[2]:
            pdf.setFillColor(120,18,56);
            pdf.circle(78.5, 410, 3.5, 'F');
        break;
        case LeyFederal = LeyFedTrasSerEs[3]:
            pdf.setFillColor(120,18,56);
            pdf.circle(169.5, 444, 4, 'F');
        break;
        case LeyFederal = LeyFedTrasSerEs[4]:
            pdf.setFillColor(120,18,56);
            pdf.circle(169.5, 454, 3.5, 'F');
        break;
        case LeyFederal = LeyFedTrasSerEs[5]:
            pdf.setFillColor(120,18,56);
            pdf.circle(330.5, 390, 4, 'F');
        break;
        case LeyFederal = LeyFedTrasSerEs[6]:
            pdf.setFillColor(120,18,56);
            pdf.circle(330.5, 400, 4, 'F');
        break;
        case LeyFederal = LeyFedTrasSerEs[7]:
            pdf.setFillColor(120,18,56);
            pdf.circle(330.5, 410, 4, 'F');
        break;
        case LeyFederal = LeyFedTrasSerEs[8]:
            pdf.setFillColor(120,18,56);
            pdf.circle(330.5, 430, 4, 'F');
        break;
        case LeyFederal = LeyFedTrasSerEs[9]:
            pdf.setFillColor(120,18,56);
            pdf.circle(330.5, 444, 4, 'F');
        break;
        case LeyFederal = LeyFedTrasSerEs[10]:
            pdf.setFillColor(120,18,56);
            pdf.circle(330.5, 454, 4, 'F');
        break;

        case LeyFederal = LeyFedTrasSerEs[11]:
            pdf.setFillColor(120,18,56);
            pdf.circle(330.5, 464, 4, 'F');
        break;

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