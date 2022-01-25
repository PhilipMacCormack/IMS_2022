<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
include 'db.php';

$sql = "SELECT mname, myear, mrating, mgenreid FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Movie Title</th><th>Year of Release</th><th>Rating</th><th>Genre</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["mname"]."</td><td>".$row["myear"]."</td><td>".$row["mrating"]."</td><td>".$row["mgenreid"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

$conn->close();
?>

</body>
</html>

