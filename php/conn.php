<?php
define ('DBNAME', 'quattoracademia2');
define ('DBUSER', 'quattoracademia2');
define ('DBPASS', 'platao7777');

try{
$conn = new PDO('mysql:host=mysql03.quattoracademia.com.br;dbname=' . DBNAME, DBUSER, DBPASS);	
} catch(PDOException $e){
	echo "Erro: " . $e->getMessage() . "<br />";
}
