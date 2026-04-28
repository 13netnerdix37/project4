<?php
    require_once 'sample/tracks.php';

    echo "Просмотр треков сервиса: <br>";
    echo "<ol>";

    foreach ($track as $item) {
        echo "<li>(id=" . $item['id_track'] . ") " . $item['name'] . "</li>";
    }

    echo "</ol>";
?>