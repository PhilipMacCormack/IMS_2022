<?php

include 'db.php';

$_name = $_REQUEST['Movie_name'];
$_year = $_REQUEST['Year_of_release'];
$_rating = $_REQUEST['Rating'];
$_genreid = $_REQUEST['Genre'];

$sql = "INSERT INTO movies SET mname='$_name', myear='$_year', mrating='$_rating', mgenreid='$_genreid'";

if ($conn->query($sql) === TRUE) {
    echo "<h1>New record stored successfully in database: movies<h1>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<meta http-equiv="refresh" content="3; URL=/IMS_2022/index.php" />
<br>
<p>You will now be redirected to the submit page... <p>