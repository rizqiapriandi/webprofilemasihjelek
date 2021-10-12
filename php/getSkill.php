<?php
include 'connect.php';
$sql = 'SELECT * FROM tb_skill';

$getSkill = mysqli_query($conn, $sql);

if (!$getSkill) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>