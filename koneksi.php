<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'project_web_lanjut';

$conn = new mysqli($server, $username, $password, $database);

if($conn->connect_error){
	die('Gagal Terhubung ' . $conn->connect_error);
}

 ?>