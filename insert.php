<?php

include 'db.php';

$sql = "INSERT INTO movies (mname, myear, mrating, mgenreid)
VALUES ('test', 2005, 5, 2)"; 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>