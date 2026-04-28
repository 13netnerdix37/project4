<?php
    $linesCount = 6; 

    echo "Количество вспомненных строк: " . $linesCount . "\n";

    if ($linesCount <= 2) {
        echo "<br>Беда.";
    } elseif ($linesCount <= 4) {
        echo "<br>Плохо.";
    } elseif ($linesCount <= 6) {
        echo "<br>Кажется, что вы где-то учились.";
    } elseif ($linesCount <= 8) {
        echo "<br>Вы среднестатистический человек.";
    } elseif ($linesCount <= 10) {
        echo "<br>Нормально.";
    } elseif ($linesCount <= 12) {
        echo "<br>Хорошо.";
    } else {
        echo "<br>Отлично.";
    }
?>