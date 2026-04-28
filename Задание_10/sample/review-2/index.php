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
		$teams = require 'data.php';

		if (!empty($teams) && is_array($teams)) {
			foreach ($teams as $item) {
				printf(
					"<strong>Группа:</strong> %s (id = %d)<br>
					<strong>Страна:</strong> %s<br>
					<strong>Дата основания:</strong> %s г.<br>
					<strong>Стиль:</strong> %s<br>
					<hr>",
					$item['name'],
					$item['id_team'],
					$item['country'],
					$item['date'],
					$item['style']
				);
			}
		} else {
			echo "Данные не загружены.";
		}
	?>


</body>
</html>