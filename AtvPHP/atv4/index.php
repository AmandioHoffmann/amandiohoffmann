<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado_a = $_POST["lado_a"];
        $lado_b = $_POST["lado_b"];
        $area = $lado_a * $lado_b; 

        $tag = ($area > 10) ? "h1" : "h3";

        echo "<$tag>A área do retângulo de lados {$lado_a} e {$lado_b} metros é {$area} metros quadrados.</$tag>";
    }
    ?>