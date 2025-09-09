<?php
    function calcularMonto($tna, $monto, $plazoDias, $interesCompuesto, $plazoMeses)
    {
        $montoFinal=0;
        $tnaDecimal = ($tna / 100) /365;
        if($interesCompuesto == 'si')
        {
            for($i = 0; $i < $plazoMeses; $i++)
            {
                $montoFinal = $monto + (($monto * $tnaDecimal)*$plazoDias);
                $monto = $montoFinal;
            }
        }else
        {
            $montoFinal = $monto + (($monto * $tnaDecimal)*$plazoDias);
        }
        return $montoFinal;
    }
?>