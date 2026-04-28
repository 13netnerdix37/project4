<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Управляющие конструкции</h1>
	<h2>Циклы</h2>
	<hr>
	<h2>Вывод массива</h2>
	
	<?php
		$tracks = require 'data.php';

		if (is_array($tracks) && !empty($tracks)) {
			echo "<ol>";
			foreach ($tracks as $item) {
				printf("<li>(id=%d) %s</li>", $item['id_track'], $item['name']);
			}
			echo "</ol>";
		}
	?>
	

</body>
</html>