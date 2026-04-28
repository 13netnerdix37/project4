<?php
    $a = 3; 
    $b = 7; 
    $c = -6;

    echo "<br>Уравнение: {$a}x2 + ({$b})x + ({$c}) = 0\n";

    $d = $b * $b - 4 * $a * $c;
    echo "<br>Дискриминант D = $d<br>";

    if ($d > 0) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        echo "<br>D > 0, следовательно два корня:\n";
        echo "<br>x1 = $x1\n";
        echo "<br>x2 = $x2\n";
    } 
    elseif ($d == 0) {
        $x = (-$b + sqrt($d)) / (2 * $a);
        echo "<br>D = 0, следовательно один корень:\n";
        echo "<br>x = $x\n";
    } 
    else {
        echo "<br>D < 0, корней нет\n";
    }
?>