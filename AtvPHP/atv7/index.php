<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Juros</title>
</head>
<body>
    <?php
    
    $valorCarroAVista = 22500.00;

    $valorParcela = 489.65;

    $numeroParcelas = 60;

    $juros = ($valorParcela * $numeroParcelas) - $valorCarroAVista;

    echo 'Mariazinha pagará R$ ' . number_format($juros, 2, ',', '.') . ' de juros em comparação ao valor à vista do carro.';
    ?>
</body>
</html>
