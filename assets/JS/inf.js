/*TODO 
APLICAR CONSULTA A BASE DE DATOS UTILIZANDO JOINS

EN LUGAR DE SEGUIR CON MIS MALAS PRÁCTICAS



$(document).ready(function () {
  $('#submit').on('click', function(e) {
    e.preventDefault();
    $('#staticBackdrop').modal('show');
  });
  
});

/*

$(document).ready(function () {
  $('#submit').on('click', function(){
    $('#staticBackdrop').modal("show");
  });
  setTimeout(function() {
    $('#staticBackdrop').modal('hide');
  }, 3000));
});

$(document).ready(function () {
  $('#submit').on('click', function(e) {
    e.preventDefault();
    $('#staticBackdrop').modal('show');
  });
  
});
*/

var TiempoOrdinario=[
    {"Stuf" : "OMISIÓN DE ENTRADA"},
    {"Stuf" : "OMISIÓN DE SALIDA"},
    {"Stuf" : "OMISIÓN TOTAL"},
    {"Stuf" : "ARTÍCULO 70 FRACC. I"},
    {"Stuf" : "ARTÍCULO 70 FRACC. II"},
    {"Stuf" : "ARTÍCULO 70 FRACC. VI"},
];
var HorarioEspecial=[
    {"Stuf" : "ARTÍCULO 58"},
    {"Stuf" : "ARTÍCULO 72"},
    {"Stuf" : "ARTÍCULO 97 (FRACC. I, II, III, V)"}
]
var Horarios=[
    {"Stuf" : "ARTÍCULO 59"},
    {"Stuf" : "ARTÍCULO 66"}
]
var LicenciaSueldo=[
    {"Stuf" : "ARTÍCULO 87"},
    {"Stuf" : "ARTÍCULO 88"},
    {"Stuf" : "ARTÍCULO 89"},
    {"Stuf" : "ARTÍCULO 91 (LICENCIA MATERNIDAD)"},
    {"Stuf" : "ARTÍCULO 91 (CUIDADOS MATERNOS)"},
    {"Stuf" : "ARTÍCULO 92 JUBILACIÓN"},
    {"Stuf" : "ARTÍCULO 127 NOTA BUENA"}
]
var LicenciaSinSueldo=[
  {"Stuf" : "ARTÍCULO 93 FRACC. (I, II)"}
]
var Vacaciones=[
  {"Stuf" : "1er. PERIODO 2022"},
  {"Stuf" : "2do. PERIODO 2022"},
  {"Stuf" : "3er. PERIODO 2022 Dictamen comisión mixta"},
  {"Stuf" : "PREMIO RETRIBUIDO MATERNIDAD"},
  {"Stuf" : "PATERNIDAD RESPONSABLE"}
]

var ExReAsi=[
  {"Stuf" : "OMISIÓN DE ENTRADA"},
  {"Stuf" : "OMISIÓN DE SALIDA"},
  {"Stuf" : "OMISIÓN TOTAL"}
]
var Art43=[
  {"Stuf" : "B"},
  {"Stuf" : "E"}
]
var vacation=[
  {"Stuf" : "1er. PERIODO 2022"},
  {"Stuf" : "2do. PERIODO 2022"},
  {"Stuf" : "3er. PERIODO 2022"},
  {"Stuf" : "ESTIMULOS Y RECOMPENSAS"}
]
var incapacidad=[
  {"Stuf" : "INCAPACIDAD"},
  {"Stuf" : "PROGRAMA PERMISO RETRIBUIDO MATERNIDAD"},
  {"Stuf" : "PATERNIDAD RESPONSABLE"}
]

var InputShow = document.querySelector('.TiempoOrdinario');
var sp_hours_Show = document.querySelector('.sp-hours');
var hours = document.querySelector('.hours');
var sueldo = document.querySelector('.sueldo');
var sinsueldo = document.querySelector('.sinsueldo');
var vacaciones = document.querySelector('.vacaciones');

/*SECCIÓN DOS*/
var exra = document.querySelector('.exra');
var art = document.querySelector('.art');
var vacations = document.querySelector('.vacation');
var incap = document.querySelector('.incap');

for(i=0; i<TiempoOrdinario.length; i++){
  var Info = TiempoOrdinario[i]
  InputShow.innerHTML += `
  <div class="form-check top-space">
  <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="TO${i}" value="${Info.Stuf}">
  <label class="form-check-label" for="CondicionesGrTrabajo">
  ${Info.Stuf}
  </label>
</div><br>`
  }
  for(i=0; i<HorarioEspecial.length; i++){
  var Info_i = HorarioEspecial[i]
    sp_hours_Show.innerHTML += `
    <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="HE${i}" value="${Info_i.Stuf}">
      <label class="form-check-label" for="CondicionesGrTrabajo">
      ${Info_i.Stuf}</label>
    </div><br>
    `
  }
  for(i=0; i<Horarios.length; i++){
    var Info_i = Horarios[i]
    hours.innerHTML += `
    <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="H${i}" value="${Info_i.Stuf}">
      <label class="form-check-label" for="CondicionesGrTrabajo">
      ${Info_i.Stuf}</label>
    </div><br>`
    }
  for(i=0; i<LicenciaSueldo.length; i++){
      var Info_i = LicenciaSueldo[i]
      sueldo.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="LS${i}" value="${Info_i.Stuf}">
      <label class="form-check-label" for="CondicionesGrTrabajo">
      ${Info_i.Stuf}</label>
    </div><br>`
      }
  for(i=0; i<LicenciaSinSueldo.length; i++){
    var Info_i = LicenciaSinSueldo[i]
    sinsueldo.innerHTML += `
    <div class="form-check top-space">
    <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="LsS${i}" value="${Info_i.Stuf}">
    <label class="form-check-label" for="CondicionesGrTrabajo">
    ${Info_i.Stuf}</label>
    </div> <br>`
    }
    for(i=0; i<Vacaciones.length; i++){
      var Info_i = Vacaciones[i]
      vacaciones.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="V${i}" value="${Info_i.Stuf}">
      <label class="form-check-label" for="CondicionesGrTrabajo">
      ${Info_i.Stuf}</label>
    </div><br>`
      }

    for(i=0; i<ExReAsi.length; i++){
      var Info_i = ExReAsi[i]
      exra.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="ExReAsi" value="LEY${Info_i.Stuf}">
      <label class="form-check-label" for="">
      ${Info_i.Stuf}</label>
    </div><br>`
      }
    for(i=0; i<Art43.length; i++){
      var Info_i = Art43[i]
      art.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="Art43" value="LEY${Info_i.Stuf}">
      <label class="form-check-label" for="">
      ${Info_i.Stuf}</label>
      </div> <br>`
      }
    for(i=0; i<vacation.length; i++){
      var Info_i = vacation[i]
      vacations.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="vacation" value="LEY${Info_i.Stuf}">
      <label class="form-check-label" for="">
      ${Info_i.Stuf}</label>
    </div><br>`
      }
    for(i=0; i<incapacidad.length; i++){
      var Info_i = incapacidad[i]
      incap.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="incapacidad" value="LEY${Info_i.Stuf}">
      <label class="form-check-label" for="">
      ${Info_i.Stuf}</label>
    </div><br>`
      }

      var fecha = document.getElementById('FechaInit')
      var DaysAvailable = document.getElementById('Days').textContent
      //var numero = document.

      if(DaysAvailable < 0) document.getElementById('LS0').disabled = true;

      const botons = document.querySelectorAll("[name='CondicionesGrTrabajo']");
      botons.forEach(btn => {
        btn.addEventListener("click", function (){
          if(this.value =="ARTÍCULO 87"){
          var TuFecha = new Date(fecha.value);
          //dias a sumar
          var dias = parseInt(DaysAvailable)+1;

          //nueva fecha sumada
          TuFecha.setDate(TuFecha.getDate() + dias);

          //POSIBLES FORMATOS DE LA FECHA
         let MaxDate_0M0D = TuFecha.getFullYear() + '-' + '0' + (TuFecha.getMonth() + 1) + '-' + '0' + TuFecha.getDate();
         let MaxDate_0MDD = TuFecha.getFullYear() + '-' + '0' + (TuFecha.getMonth() + 1) + '-' + TuFecha.getDate();
         let MaxDate_MM0D = TuFecha.getFullYear() + '-' + (TuFecha.getMonth() + 1) + '-' + '0' + TuFecha.getDate();
         let MaxDate_MMDD =TuFecha.getFullYear() + '-' + (TuFecha.getMonth() + 1) + '-' + TuFecha.getDate();

         let month = (TuFecha.getMonth() + 1)
         let dia = TuFecha.getDate()

        /* Aqui estoy usando un operador para evaluar 4 casos:
        el mes es menor a 10 y el dia menor a 10
        el mes es menor a 10 y el dia mayor o igual a 10
        el mes es mayor o igual a 10 y el dia menor a 10
        el mes es mayor o igual a 10 y el dia mayor o igual a 10

        Y asi puedo modficar el valor maximo de la fecha y que a ésta no le falte un 0, ya que asi no admite el valor y ps no sirve

        TO DO
        INVESTIGA OTRA FORMA DE ALTERAR GET MONTH Y GET DATE - SE COME LOS 0*/
         month < 10 ? 
            dia < 10 ? (document.getElementById('FechaFin').max = MaxDate_0M0D) : (document.getElementById('FechaFin').max = MaxDate_0MDD)
         :  dia < 10 ? (document.getElementById('FechaFin').max = MaxDate_MM0D) : (document.getElementById('FechaFin').max = MaxDate_MMDD)

            document.getElementById('FechaFin').min = fecha.value;
          }
        });
      });