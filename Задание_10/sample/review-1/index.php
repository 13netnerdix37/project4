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
	$team = require 'data.php';

	if (is_array($team)) {
		foreach ($team as $item) {
			echo "
				<strong>Группа:</strong> {$item['name']} (id = {$item['id_team']})<br/>
				<strong>Страна:</strong> {$item['country']}<br />
				<strong>Дата основания:</strong> {$item['date']}<br />
				<strong>Стиль:</strong> {$item['style']}<br />
				<hr/>
			";
		}
	} else {
		echo "Ошибка: Данные о группах не найдены.";
	}
?>


</body>
</html>