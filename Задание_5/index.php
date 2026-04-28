<?php
    require_once 'sample/albums.php';

    echo '<table border="1" cellpadding="5" cellspacing="0">';
    echo '<thead>
            <tr>
                <th>ID</th>
                <th>Альбом</th>
                <th>Дата выпуска</th>
                <th>Страна</th>
                <th>Идентификатор группы</th>
            </tr>
        </thead>';
    echo '<tbody>';

    foreach ($album as $row) {
        echo '<tr>';
        echo '<td>' . $row['id_album'] . '</td>';
        echo '<td>' . $row['title'] . '</td>';
        echo '<td>' . $row['date'] . '</td>';
        echo '<td>' . $row['country'] . '</td>';
        echo '<td>' . $row['id_team'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
?>