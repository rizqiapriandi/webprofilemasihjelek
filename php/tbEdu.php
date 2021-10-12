<?php
include 'connect.php';
include 'getSkill.php';
$no 	= 1;
while ($row=mysqli_fetch_array($getEdu))
{
       echo "<tr>";
       echo "<td>".$row['id']."</td>";
       echo "<td>".$row['sekolah']."</td>";
       echo "<td>".$row['periode']."</td>";
       echo "<td>".$row['nem']."</td>";
       echo "</tr>";
}
?>