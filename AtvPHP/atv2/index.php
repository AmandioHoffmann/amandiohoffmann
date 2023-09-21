<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $valor3 = $_POST["valor3"];
        $resultado = $valor1 + $valor2 + $valor3;

        if ($valor1 > 10) {
            echo '<p style="color: blue;">Resultado: ' . $resultado . '</p>';
        }
        elseif ($valor2 < $valor3) {
            echo '<p style="color: green;">Resultado: ' . $resultado . '</p>';
        }
        
        elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            echo '<p style="color: red;">soma: ' . $resultado . '</p>';
        }
       
        else {
            echo '<p>soma: ' . $resultado . '</p>';
        }
    }
    ?>