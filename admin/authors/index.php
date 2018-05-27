<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

try
{
	$result = $pdo->query('SELECT id, name FROM author');
} catch (PDOException $e) {
	$error = 'Ошибка при извлечении авторов из базы данных!';
	include 'error.html.php';
	exit();
}

foreach ($result as $row) {
	$authors[] = array('id' => $row['id'], 'name' => $row['name']);
}

include 'authors.html.php';