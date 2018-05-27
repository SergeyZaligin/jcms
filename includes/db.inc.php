<?php

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=jblog', 'cobweb', '1234');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
	$output = 'Невозможно подключиться к серверу баз данных.' . $e->getMessage();
	include 'output.html.php';
	exit();
}