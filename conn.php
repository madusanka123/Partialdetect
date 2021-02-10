<?php
$host = 'localhost';
$user = 'id15860293_datauser';
$pas = 'OksO@F4tPuTFUZ-[';
$database = 'id15860293_datadb';

$konek = mysqli_connect($host, $user, $pas, $database);

if (!$konek) {
	echo "Connection fail";
}
