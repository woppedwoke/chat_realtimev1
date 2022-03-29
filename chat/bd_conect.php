<?php
	try {
		$dns = "mysql:dbname=chatsimples;host=localhost";
		$user = "leandro";
		$pass = "Leandro1@34_12";
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}



?>