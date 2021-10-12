<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'id16984877_root'; // User Server
$db_pass = 'jd(Jm{@5F7}e_aPE'; // Password Server
$db_name = 'id16984877_db_prjsmt2'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}
?>