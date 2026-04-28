<?php
    require_once 'sample/tracks.php';

    $i = 0;
    echo "<ul>";
    if (count($track) > 0) {
        do {
            echo "<li>(" . $track[$i]['id_track'] . ") " . $track[$i]['name'] . "</li>";
            $i++;
        } while ($i < count($track));
    }
    echo "</ul>";

    echo "<ol>";
    for ($i = 0; $i < count($track); $i++) {
        echo "<li>(" . $track[$i]['id_track'] . ") " . $track[$i]['name'] . " (id альбома: " . $track[$i]['id_album'] . ")</li>";
    }
    echo "</ol>";

    echo "<table border='1' style='border-collapse: collapse;'>";
    echo "<tr><th>id</th><th>Трек</th><th>Примечание</th><th>Id-альбома</th></tr>";
    foreach ($track as $item) {
        echo "<tr>";
        echo "<td>" . $item['id_track'] . "</td>";
        echo "<td>" . $item['name'] . "</td>";
        echo "<td>" . $item['note'] . "</td>";
        echo "<td>" . $item['id_album'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo '<br>';
    echo "<table border='1' style='border-collapse: collapse;'>";
    echo "<tr><th>id</th><th>Трек</th><th>Примечание</th><th>Id-альбома</th></tr>";
    $i = 0;
    while ($i < count($track)) {
        echo "<tr>";
        echo "<td>" . $track[$i]['id_track'] . "</td>";
        echo "<td>" . $track[$i]['name'] . "</td>";
        echo "<td>" . $track[$i]['note'] . "</td>";
        echo "<td>" . $track[$i]['id_album'] . "</td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";
?>