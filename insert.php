<?php

include 'db.php';

//Get input from form and create variables for them
$_name = $_REQUEST['Movie_name'];
$_year = $_REQUEST['Year_of_release'];
$_rating = $_REQUEST['Rating'];
$_genreid = $_REQUEST['Genre'];

//Query to insert input data in database, prints error if query does not work
$sql = "INSERT INTO movies SET mname='$_name', myear='$_year', mrating='$_rating', mgenreid='$_genreid'";

if ($conn->query($sql) === TRUE) {
    echo "<br><br><h1>&emsp;New record stored successfully in database: movies<h1>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


$conn->close();
?>

<!-- Frontend, Style, metatags, and code to redirect from /IMS_2022/insert.php to /IMS/index.php after 3 seconds -->
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
&emsp;You will now be redirected to the submit page...