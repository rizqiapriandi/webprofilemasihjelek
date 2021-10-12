<?php
include 'connect.php';

$sql = 'SELECT * FROM tb_comment';

$getComment = mysqli_query($conn, $sql);

if (!$getComment) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>