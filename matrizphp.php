<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Matriz Aleatória</title>
</head>
<body>
    <h1>Matriz Aleatória</h1>

    <?php
    $x = 5;
    $y = 5;

    $matriz = array();

    for ($i = 0; $i < $x; $i++) {
        $row = array();
        for ($j = 0; $j < $y; $j++) {
            $row[] = rand(1, 1000);
        }
        $matriz[] = $row;
    }

    echo '<table border="1">';
    foreach ($matriz as $linha) {
        echo '<tr>';
        foreach ($linha as $valor) {
            echo '<td>' . $valor . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>

</body>
</html>
