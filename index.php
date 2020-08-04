<?php


require_once(dirname(__FILE__, 2) . '/src/config/database.php' );

//Database::getConnection(); chama somente a base de dados

//Executa o sql

$sql = 'SELECT * from users';
$result = Database::getResultFromQuery($sql);

while ($row = $result->fetch_assoc()){
	print_r($row);
	echo '<br>';

}