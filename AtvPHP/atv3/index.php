<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST["lado"];
        $area = $lado * $lado;

        echo "A área do quadrado de lado {$lado} metros é {$area} metros quadrados.";
    }
    ?>