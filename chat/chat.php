<?php
include("bd_conect.php");
$sql = $pdo->query("SELECT * FROM cha1");
foreach ($sql->fetchAll() as $key) {
	echo "<h3>".$key['nome']."</h3>";
	echo "<h5>".$key['mensagem']."</h5>";
}



?>