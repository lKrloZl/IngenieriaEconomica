/* Asignación de las principales variables */
var saldo = document.getElementById('saldo');
var tiempo = document.getElementById('tiempo');
var tasaEfectiva = document.getElementById('tasaEfectiva');
var btnCalcular = document.getElementById('btnCalcular');
var llenarTabla = document.querySelector('#lista-tabla tbody');

btnCalcular.addEventListener('click', () => {
    calcularRenta(saldo.value, tasaEfectiva.value, tiempo.value);
})

/* Creación de la función */
function calcularRenta(saldo, tasaEfectiva, tiempo) {

    while (llenarTabla.firstChild) {
        llenarTabla.removeChild(llenarTabla.firstChild);
    }

    /* Declaración de nuevas variables */
    var renta, interes, amortizacion;

    /* Operaciones y asignación de resultados */
    renta = saldo * (Math.pow(1 + tasaEfectiva / 100, tiempo) * tasaEfectiva / 100) / (Math.pow(1 + tasaEfectiva / 100, tiempo) - 1);

    /* Fila n periodos*/
    for (periodo = 1; periodo <= tiempo; periodo++) {

        interes = saldo * (tasaEfectiva / 100);
        amortizacion = renta - interes;
        saldo = saldo - amortizacion;

        var row = document.createElement('tr');
        row.innerHTML = `
            <td>${periodo}</td>
            <td class="renta">${renta.toFixed(2)}</td>
            <td>${interes.toFixed(2)}</td>
            <td>${amortizacion.toFixed(2)}</td>
            <td>${saldo.toFixed(2)}</td>
        `;
        llenarTabla.appendChild(row)
    }

    /* Fila renta total */
    totalRenta = renta * tiempo;

    var row = document.createElement('tr');
    row.innerHTML = `
        <td>TOTAL</td>
        <td class="renta">${totalRenta.toFixed(2)}</td>
        <td></td>
        <td></td>
        <td></td>
    `;
    llenarTabla.appendChild(row)
}