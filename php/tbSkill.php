<?php
include 'connect.php';
include 'getSkill.php';
$no 	= 1;
while ($row=mysqli_fetch_array($getSkill))
{
       echo "<tr>";
       echo "<td>".$row['id']."</td>";
       echo "<td>".$row['skillName']."</td>";
       echo "<td>".$row['score']."</td>";
       echo "</tr>";
}
?>