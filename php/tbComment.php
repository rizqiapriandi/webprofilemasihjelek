<?php
include 'connect.php';
include 'getComment.php';
while ($row=mysqli_fetch_array($getComment))
{
       echo "<tr>";
       echo "<td>"."Kak "."</td>";
       echo "<td>".$row['name']."</td>";
       echo "<td>"." berkomentar "."</td>";
       echo "<td>".$row['valComment']."</td>";
       echo "</tr>";
       echo "<br>";
}
?>