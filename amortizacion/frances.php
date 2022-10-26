<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Francés - Sistema de Pagos Uniformes</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	<header>
		<h1 class="francia">SISTEMA FRANCÉS</h1>
        <h2>SISTEMA DE PAGOS UNIFORMES</h2>
	</header>
	<main>
        <div class="contenedor">
            <h3>DIGITE LOS DATOS SOLICITADOS</h3>
                <div>
                    <input type="text" id="saldo" placeholder="Prestamo (P)" title="Digite el importe del prestamo">
                </div><br>
                <div>
                    <input type="text" id="tiempo" placeholder="Periodos (n)" title="Digite el número total de periodos de pagos del préstamo.">
                </div><br>
                <div>
                    <input type="text" id="tasaEfectiva" placeholder="Tasa efectiva % (i)" title="Digite la taza efectiva del préstamo por periodo.">
                </div><br><br>
                <div>
                    <button type="submit" id="btnCalcular" class="btn btnCalcular tooltip">Calcular<span class="tooltip-top">Haz click para que aparesca la tabla con los resultados</span></button>
                </div>
        </div><br>
        <table id="lista-tabla" class="tabla">
            <thead>
                <tr>
                    <th title="En esta columna se mostrará la cantidad total de 'PERIODOS' (Anual, mensual, trimestral, semestral, etc).">PERIODOS DE PAGO</th>
                    <th class="renta" title="1. En esta columna se mostrará el resultado constante que sale a través de la formula.">RENTA</th>
                    <th title="2. En esta columna se mostrará el resultado de la 'TASA EFECTIVA' por el 'SALDO' del periodo anterior.">INTERÉS</th>
                    <th title="3. En esta columna se mostrará el resultado de la 'RENTA' menos el 'INTERÉS'.">AMORTIZACIÓN</th>
                    <th title="4. En esta columna se mostrará el resultado del 'SALDO' del periodo anterior menos la 'AMORTIZACIÓN'.">SALDO</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table><br>
        <script src="js/amortizacionFrances.js"></script><br>
        <a href="index.php"><img class="imgRegresar" src=images/regresar.png title='Volver atrás'></a>
        <a href="javascript:window.print()"><img class="imgImprimir" src="images/imprimir.png" title='Imprimir'></a>
	</main>
</body>

</html>