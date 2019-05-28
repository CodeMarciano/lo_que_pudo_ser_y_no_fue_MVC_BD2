let calcularNacimiento = document.getElementById('calcularNacimiento');
let dibujarEdad = document.getElementById('dibujarEdad');
let opcionMenorEdad =document.getElementById('opcionMenorEdad');

function desabilitandoInputsConSwitchDeAcuerdoALaEdad(edad){
    if (edad >= 18) {
        let desabilitarMenorEdad = document.getElementsByClassName('desabilitar');
        for (let el of desabilitarMenorEdad) {
            el.removeAttribute('disabled');
        }
        opcionMenorEdad.setAttribute('hidden', '');

    } else {
        let desabilitarMenorEdad = document.getElementsByClassName('desabilitar');
        for (let el of desabilitarMenorEdad) {
            el.setAttribute('disabled', '');
        }
        opcionMenorEdad.removeAttribute('hidden');
    }
}

calcularNacimiento.addEventListener('change', function () {
    // let datas = {fechaNacimiento: calcularNacimiento.value};
    const data  = new FormData();
    data.append('fechaNacimiento', calcularNacimiento.value);

    fetch('Views/js/calcularEdad.php',{
        method: 'POST',
        body: data
    })
        .then(res => res.json())
        .then(data =>{
            dibujarEdad.innerHTML = `
                <input disabled value='${data} año(s)'/>                  
            `;
            desabilitandoInputsConSwitchDeAcuerdoALaEdad(data);
        })

});