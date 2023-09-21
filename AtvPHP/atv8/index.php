<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Parcelas</title>
</head>
<body>
    <?php

    $valorMotoAVista = 8654.00;
    
    $taxaJuros = 0.015;

    $parcelas = [24, 36, 48, 60];

    foreach ($parcelas as $numParcelas) {
   
        $valorParcela = ($valorMotoAVista / $numParcelas) * (1 + $taxaJuros);

        echo "Para $numParcelas vezes, o valor da parcela é R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";

        $taxaJuros += 0.005;
    }
    ?>
</body>
</html>
