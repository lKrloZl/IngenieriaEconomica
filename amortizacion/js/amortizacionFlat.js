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
    interes = saldo * (tasaEfectiva/100);
    amortizacion = saldo / tiempo;
    renta = interes + amortizacion;

    /* Fila n periodos */
    for (periodo = 1; periodo <= tiempo; periodo++) {

        saldo = saldo - amortizacion;

        var row = document.createElement('tr');
        row.innerHTML = `
            <td>${periodo}</td>
            <td class="interes">${interes.toFixed(2)}</td>
            <td>${renta.toFixed(2)}</td>
            <td class="amortizacion">${amortizacion.toFixed(2)}</td>
            <td>${saldo.toFixed(2)}</td>
        `;
        llenarTabla.appendChild(row)
    }

    /* Fila amortización total */
    totalInteres = interes * tiempo;
    totalAmortizacion = amortizacion * tiempo;

    var row = document.createElement('tr');
    row.innerHTML = `
        <td>TOTAL</td>
        <td class="interes">${totalInteres.toFixed(2)}</td>
        <td></td>
        <td class="amortizacion">${totalAmortizacion.toFixed(2)}</td>
        <td></td>
    `;
    llenarTabla.appendChild(row)
}