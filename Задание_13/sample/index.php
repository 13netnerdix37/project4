<?php

    require 'dump/albums.php';
    require 'dump/tracks.php';

    $targetId = $_GET['id'] ?? null;

    if ($targetId) {
        foreach ($albums as $album) {
            if ($album['id_album'] == $targetId) {
                
                echo "<strong>{$album['title']} ({$album['country']})</strong>";
                echo "<ul>";

                foreach ($tracks as $track) {
                    if ($track['id_album'] == $targetId) {
                        echo "<li>{$track['name']}</li>";
                    }
                }

                echo "</ul>";
                
                break; 
            }
        }
    } else {
        echo "Введите ID альбома в адресную строку, например: ?id=4";
    }
?>