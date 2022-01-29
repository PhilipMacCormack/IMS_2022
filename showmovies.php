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
<br><h1>&emsp;Movie Database: Library</h1>

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
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

<?php
include 'db.php';
require_once 'functions.php';

$sql = "SELECT movies.mid, movies.mname, movies.myear, movies.mrating, movies.mgenreid, genres.mgenre, genres.gid
FROM movies
LEFT JOIN genres 
ON movies.mgenreid=gid";

$result = $conn->query($sql);

//If the query gives any results, print the table with the results
if ($result > 0)
{
     foreach ($result as $row)
     {?>
      <tr>
        <td><?php echo $row["mid"]; ?></td>
        <td><?php echo $row["mname"]; ?></td>
        <td><?php echo $row["myear"]; ?></td>
        <td><?php echo $row["mrating"]; ?></td>
        <td><?php echo $row["mgenreid"]; ?></td>
        <td><?php echo $row["mgenre"]; ?></td>
        <td>
          <form action='delete_record.php?id="<?php echo $row["mid"]; ?>"' method="post">
            <input type="hidden" name="id" value="<?php echo $row["mid"]; ?>">
            <input type="submit" name="submit" value="Delete">
            </form>
            </td>
      <tr>
        <?php
     }
}
else
{
    echo "0 results found.";
}

$conn->close();

?>
<form action=/IMS_2022/index.php method=post>
            <input type="submit" name="submit" value="Submit a new movie">
            </form>
            </td><br><br>

