<?php
include 'connect.php';

// deklarasi variable
$name = $_POST['name'];
$valComment = $_POST['valComment'];
          
// input data pada kolom
$sql = "INSERT INTO tb_comment VALUES ('$name','$valComment')";

//respon
if(mysqli_query($conn, $sql)){ 
    header("location:../index.php");
} else{ 
    echo "ERROR: Hush! Sorry $sql. " 
    . mysqli_error($conn); 
} 
?>