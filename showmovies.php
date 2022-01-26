<!DOCTYPE html>
<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <h1>Movie Database: Library</h1>
<form action="/IMS_2022/searchbox.php" method="GET">
  <div class="input-group mb-3">
    <input type="text" id="moviesearch" name = "search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="Search movies">
    <button type="submit" class="btn btn-primary"> Search</button>
<br><br>

<div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Movie Title</th>
                                    <th>Year of Release</th>
                                    <th>Rating</th>
                                    <th>Genre id</th>
                                    <th>Genre</th>
                                </tr>
                            </thead>
                            <tbody>

<?php
include 'db.php';

$sql = "SELECT movies.mid, movies.mname, movies.myear, movies.mrating, movies.mgenreid, genres.mgenre, genres.gid
FROM movies
LEFT JOIN genres 
ON movies.mgenreid=gid";

$result = $conn->query($sql);

// want to select the genre where the gid=mgenreid
if ($result > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
      "<tr>
      <td>".$row["mid"]."</td>
      <td>".$row["mname"]."</td>
      <td>".$row["myear"]."</td>
      <td>".$row["mrating"]."</td>
      <td>".$row["mgenreid"]."</td>
      <td>".$row["mgenre"]."</td>
      </tr>";
    }
    echo "</table>";
  }
else {
    echo "0 results found.";
  }

$conn->close();

?>
<a href="index.php">Submit a new Movie</a>


