<?php
    require 'dump/albums.php';
    require 'dump/tracks.php';

    $albumIdParam = isset($_GET['id']) ? $_GET['id'] : null;

    echo "<h1>Список треков по альбомам</h1>";

    foreach ($albums as $album) {
        
        if ($albumIdParam === null || $album['id_album'] == $albumIdParam) {
            
            echo "<ul>";
            echo "<li><strong>Альбом: " . htmlspecialchars($album['title']) . " (" . $album['date'] . ")</strong>";
            
            echo "<ul>";
            $hasTracks = false;

            foreach ($tracks as $track) {
                
                if ($track['id_album'] == $album['id_album']) {
                    echo "<li>" . htmlspecialchars($track['name']) . "</li>";
                    $hasTracks = true;
                }
            }

            if (!$hasTracks) {
                echo "<li><em>Треки не найдены</em></li>";
            }

            echo "</ul>";
            echo "</li>";
            echo "</ul>";
        }
    }
?>