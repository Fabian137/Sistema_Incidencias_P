const infoValidation = (id) => {
    let folionumber = document.getElementById('F'+id).textContent;
    let Dependencia = document.getElementById('D'+id).textContent;
    let Nombre = document.getElementById('N'+id).textContent;
    const Titulo = document.getElementById('staticBackdropLabel')
    Titulo.innerHTML = `VALIDACIÓN DE INCIDENCIA: ${folionumber}`;
    document.validationForm.NumeroFolio.value = folionumber;
    document.validationForm.Dependency.value = Dependencia;
    document.validationForm.Nombre.value = Nombre;
}

/*
const botons = document.querySelectorAll("[name='btnPDF']");

botons.addEventListener("click", function(){
    console.log(botons.value)
})
botons.forEach(btn => {
    
    // Y cuando el usuario haga clic sobre el elemento
    btn.preventDefa
      btn.addEventListener("click", function() {
          //if (resultados) resultados.textContent = this.value;
        var IdentifyID = this.value;
        console.log(IdentifyID);
        return IdentifyID
      });
    });

    */