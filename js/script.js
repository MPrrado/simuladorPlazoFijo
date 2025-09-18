let meses = document.getElementById('contenedor-meses');
let interesCompuestoSi = document.getElementById('si');
let interesCompuestoNo = document.getElementById('no');

function activarSeleccionadorMeses(hola)
{
    if(interesCompuestoSi.checked)
    {
        meses.style.display = 'block'
    }else
    {
        meses.style.display = 'none';
    }
}

interesCompuestoSi.addEventListener('change', activarSeleccionadorMeses);
// interesCompuestoSi.addEventListener('load', activarSeleccionadorMeses);
interesCompuestoNo.addEventListener('change', activarSeleccionadorMeses);


