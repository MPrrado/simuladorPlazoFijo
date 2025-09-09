<?php
    require_once('encabezado.php');
    require_once('funcion.php');
    $header = '';
    if(!empty($_POST['tna']) && !empty($_POST['plazo']) && !empty($_POST['monto']))
    {
        $tna = $_POST['tna'];
        $plazo = $_POST['plazo'];
        $monto = $_POST['monto'];
        $montoFinal = 0;
        $interesCompuesto = '';

        if(!empty($_POST['interesCompuesto']) && !empty($_POST['meses'])) //compruebo si es que quiere interes compuesto solamente si el plazo  > 1
        {
            $interesCompuesto = $_POST['interesCompuesto'];
            $plazoMeses = empty($_POST['meses']);
        }
        $montoFinal = calcularMonto($tna, $monto, $plazo, $interesCompuesto, $plazoMeses);
        $interesGanado = number_format(($montoFinal - $monto),2,',','.');
        $monto = number_format($monto,2,',','.');
        $montoFinal = number_format($montoFinal,2,',','.');
        echo '<section>
                <section>
                    <h1>SIMULADOR DE PLAZO FIJO EN PESOS</h1>
                    <p>MONTO PUESTO EN PLAZO: $'. $monto .'</p>
                    <p>INTERES GENERADO: $'. $interesGanado .'</p>
                    <p>PLAZO: '. $plazo .' (dia/s)</p>
                    <p>TOTAL GENERADO: $'. $montoFinal .'</p>
                </section>
            </section>';
        }
        else
        {
            $header = 'refresh:3;url=../index.php';
            echo '<section>
                    <h2>ERROR NO COMPLETO LOS CAMPOS CORRECTAMENTE. REDIRIGIENDO...</h2>
                </section>';
            header($header);
        }
    require_once('pie.php');
?>

<section>
    <section>
        <h2>ERROR NO COMPLETO LOS CAMPOS CORRECTAMENTE. REDIRIGIENDO...</h2>
    </section>
</section>