<?php
    function calcularMonto($tna, $monto, $plazo, $interesCompuesto)
    {
        $montoFinal=0;
        $tnaDecimal = ($tna / 100) /12;
        echo $tnaDecimal.'</br>';
        if($interesCompuesto == 'si')
        {
            for($i = 0; $i < $plazo; $i++)
            {
                $montoFinal = $monto + ($monto * $tnaDecimal);
                $monto = $montoFinal;
            }
        }else
        {
           
            $montoFinal = $monto + (($monto * $tnaDecimal)*$plazo);
        }
        return $montoFinal;
    }
?>