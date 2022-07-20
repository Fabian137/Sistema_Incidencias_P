const infoValidation = (id) => {
    let folionumber = document.getElementById('F'+id).textContent;
    let Dependencia = document.getElementById('D'+id).textContent;
        const Titulo = document.getElementById('staticBackdropLabel')
        Titulo.innerHTML = `VALIDACIÓN DE INCIDENCIA: ${folionumber}`;
        document.validationForm.NumeroFolio.value = folionumber;
        document.validationForm.Dependency.value = Dependencia;
}