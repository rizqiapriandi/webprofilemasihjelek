<?php
include 'connect.php';
$sql = 'SELECT * FROM tb_edu';

$getEdu = mysqli_query($conn, $sql);

if (!$getEdu) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>