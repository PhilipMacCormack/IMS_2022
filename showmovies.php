<!DOCTYPE html>
<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<br><h1>&emsp;Movie Database: Library</h1>

<!-- Create searchbox for searching in the table -->
<form action="/IMS_2022/searchbox.php" method="GET">
  <div class="input-group mb-3">
    <input type="text" id="moviesearch" name = "search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="Search movies">
    <button type="submit" class="btn btn-primary"> Search</button>
<br><br>

<!-- Create first row in table for defining each column -->
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

//Query for selecting attributes needed in table
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
          <!-- Adding delete button for each record row -->
          <form action='delete_record.php?id="<?php echo $row["mid"]; ?>"' method="post">
            <button class = "btn"><i class="fa fa-trash"></i> Delete</button>
            <input type="hidden" name="id" value="<?php echo $row["mid"]; ?>">
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

<!-- Create button for redirecting to submit page -->
<form action=/IMS_2022/index.php method=post>
            <input type="submit" name="submit" value="Submit a new movie">
            </form>
            </td><br><br>

