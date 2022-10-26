<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Inglés - Sistema de interés constante</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	<header>
		<h1 class="inglesa">SISTEMA INGLÉS</h1>
        <h2>SISTEMA DE AMORTIZACIONES E INTERESES CONSTANTES</h2>
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
                    <button type="submit" id="btnCalcular" class="btn btnCalcular tooltip">Calcular<span class="tooltip-top">Al hacer click aparecerá la tabla con los resultados</span></button>
                </div>
        </div><br>
        <table id="lista-tabla" class="tabla">
            <thead>
                <tr>
                    <th title="En esta columna se mostrará la cantidad total de 'PERIODOS' (Anual, mensual, trimestral, semestral, etc).">PERIODOS DE PAGO</th>
                    <th class="interes" title="1.En esta columna se mostrará el resultado constante del 'PRESTAMO' por la 'TASA EFECTIVA'.">INTERÉS</th>
                    <th title="3. En esta columna se mostrará el resultado del 'INTERÉS' más la 'AMORTIZACIÓN'.">RENTA</th>
                    <th title="2. En esta columna se mostrará en ceros hasta el penúltimo periodo de pago, al último se mostrará el 'PRESTAMO'.">AMORTIZACIÓN</th>
                    <th title="4. En esta columna se mostrará el 'SALDO' del periodo anterior menos la 'AMORTIZACIÓN'.">SALDO</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table><br>
    <script src="js/amortizacionIngles.js"></script><br>
    <a href="index.php"><img class="imgRegresar" src=images/regresar.png title='Volver atrás'></a>
    <a href="javascript:window.print()"><img class="imgImprimir" src="images/imprimir.png" title='Imprimir'></a>
	</main>
</body>

</html>