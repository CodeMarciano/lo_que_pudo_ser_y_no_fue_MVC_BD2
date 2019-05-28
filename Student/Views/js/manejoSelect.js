let selectValor = document.getElementById('valorSelect');
let desabilitarMenorEdad = document.getElementsByClassName('desabilitar');

selectValor.addEventListener('change', function (e) {
    if (selectValor.value === 'Si') {
        for (let el of desabilitarMenorEdad) {
            el.removeAttribute('disabled');
        }
    } else {
        for (let el of desabilitarMenorEdad) {
            el.setAttribute('disabled', '');
        }
    }
});