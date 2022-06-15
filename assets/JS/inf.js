/*TODO 
APLICAR CONSULTA A BASE DE DATOS UTILIZANDO JOINS

EN LUGAR DE SEGUIR CON MIS MALAS PRÁCTICAS

*/
var TiempoOrdinario=[
    {"Stuf" : "OMISIÓN DE ENTRADA"},
    {"Stuf" : "OMISIÓN DE SALIDA"},
    {"Stuf" : "OMISIÓN TOTAL"},
    {"Stuf" : "ATÍCULO 70 FRACC. I"},
    {"Stuf" : "ATÍCULO 70 FRACC. II"},
    {"Stuf" : "ATÍCULO 70 FRACC. VI"},
];
var HorarioEspecial=[
    {"Stuf" : "ATÍCULO 58"},
    {"Stuf" : "ATÍCULO 72"},
    {"Stuf" : "ATÍCULO 97 (FRACC. I, II, III, V)"}
]
var Horarios=[
    {"Stuf" : "ATÍCULO 59"},
    {"Stuf" : "ATÍCULO 66"}
]
var LicenciaSueldo=[
    {"Stuf" : "ATÍCULO 87"},
    {"Stuf" : "ATÍCULO 88"},
    {"Stuf" : "ATÍCULO 89"},
    {"Stuf" : "ATÍCULO 91 (LICENCIA MATERNIDAD)"},
    {"Stuf" : "ATÍCULO 91 (CUIDADOS MATERNOS)"},
    {"Stuf" : "ATÍCULO 92 JUBILACIÓN"},
    {"Stuf" : "ATÍCULO 127 NOTA BUENA"}
]
var LicenciaSinSueldo=[
  {"Stuf" : "ATÍCULO 93 FRACC. (I, II)"}
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
  {"Stuf" : "2er. PERIODO 2022"},
  {"Stuf" : "ESTIMULOS Y RECOMPENSAS"}
]
var incapacidad=[
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
  <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="" value="${Info.Stuf}">
  <label class="form-check-label" for="CondicionesGrTrabajo">
  ${Info.Stuf}
  </label>
</div><br>`
  }
  for(i=0; i<HorarioEspecial.length; i++){
  var Info_i = HorarioEspecial[i]
    sp_hours_Show.innerHTML += `
    <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="" value="${Info_i.Stuf}">
      <label class="form-check-label" for="CondicionesGrTrabajo">
      ${Info_i.Stuf}</label>
    </div><br>
    `
  }
  for(i=0; i<Horarios.length; i++){
    var Info_i = Horarios[i]
    hours.innerHTML += `
    <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="" value="${Info_i.Stuf}">
      <label class="form-check-label" for="CondicionesGrTrabajo">
      ${Info_i.Stuf}</label>
    </div><br>`
    }
  for(i=0; i<LicenciaSueldo.length; i++){
      var Info_i = LicenciaSueldo[i]
      sueldo.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="" value="${Info_i.Stuf}">
      <label class="form-check-label" for="CondicionesGrTrabajo">
      ${Info_i.Stuf}</label>
    </div><br>`
      }
  for(i=0; i<LicenciaSinSueldo.length; i++){
    var Info_i = LicenciaSinSueldo[i]
    sinsueldo.innerHTML += `
    <div class="form-check top-space">
    <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="" value="${Info_i.Stuf}">
    <label class="form-check-label" for="CondicionesGrTrabajo">
    ${Info_i.Stuf}</label>
    </div> <br>`
    }
    for(i=0; i<Vacaciones.length; i++){
      var Info_i = Vacaciones[i]
      vacaciones.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="CondicionesGrTrabajo" id="" value="${Info_i.Stuf}">
      <label class="form-check-label" for="CondicionesGrTrabajo">
      ${Info_i.Stuf}</label>
    </div><br>`
      }

    for(i=0; i<ExReAsi.length; i++){
      var Info_i = ExReAsi[i]
      exra.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="LeyFederalTrabajadores" id="" value="${Info_i.Stuf}">
      <label class="form-check-label" for="">
      ${Info_i.Stuf}</label>
    </div><br>`
      }
    for(i=0; i<Art43.length; i++){
      var Info_i = Art43[i]
      art.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="LeyFederalTrabajadores" id="" value="${Info_i.Stuf}">
      <label class="form-check-label" for="">
      ${Info_i.Stuf}</label>
      </div> <br>`
      }
    for(i=0; i<vacation.length; i++){
      var Info_i = vacation[i]
      vacations.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="LeyFederalTrabajadores" id="" value="${Info_i.Stuf}">
      <label class="form-check-label" for="">
      ${Info_i.Stuf}</label>
    </div><br>`
      }
    for(i=0; i<incapacidad.length; i++){
      var Info_i = incapacidad[i]
      incap.innerHTML += `
      <div class="form-check top-space">
      <input class="form-check-input" type="radio" name="LeyFederalTrabajadores" id="" value="${Info_i.Stuf}">
      <label class="form-check-label" for="">
      ${Info_i.Stuf}</label>
    </div><br>`
      }

var diasSelect = document.querySelector('select.form-select.dias');
 for(i=1; i<=31; i++){
   //var NumDays = i
   diasSelect.innerHTML += `
   <option value="${i}">${i}</option>`
 }