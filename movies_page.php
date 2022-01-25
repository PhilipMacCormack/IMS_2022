<?php
$con=mysqli_connect("localhost","root","root","movies_db");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM movies");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['mname'] . "</td>";
echo "<td>" . $row['myear'] . "</td>";
echo "<td>" . $row['mrating'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>