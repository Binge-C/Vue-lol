<?php
	$data = file_get_contents("http://lolapi.games-cube.com/champion");
	echo $_GET['callback'].'('.$data.')';
?>