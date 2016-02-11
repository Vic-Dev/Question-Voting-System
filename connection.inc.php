<?php
// config.php includes username and password for server - not part of git repo
require 'config.php';

function dbConnect() {
	global $user, $password;
	$conn = new mysqli('localhost', $user, $password, 'qvs')
	or die ('Cannot open database');
	return $conn;
}
?>