<?php
    require_once 'sample/tracks.php';

    echo "Треки альбома Back in Black (AC/DC):";
    echo "<ul>";

    foreach ($track as $item) {
        if ($item['id_album'] == '6') {
            echo "<li>" . $item['name'] . "</li>";
        }
    }

    echo "</ul>";
?>