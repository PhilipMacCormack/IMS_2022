<!DOCTYPE html>
<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<?php

  include 'db.php';

  //Query to get genres
  $sql = "SELECT * FROM genres";
  $all_genres = mysqli_query($conn,$sql);

  //Make variables if genre is set
  if (isset($_POST['submit'])){
    $gid = mysqli_real_escape_string($conn,$_POST['gid']);
    $genre = mysqli_real_escape_string($conn,$_POST['mgenre']);
  }
?>

<!DOCTYPE html>
<html lang="en">
<body>

<!-- Frontend design of index -->
<br><h1>&emsp;Movie Database: Submit a movie</h1>
  <body>
    <img src='movieicon.png' width='125' length=125>
    <br><br>

    <form action="/IMS_2022/insert.php" method="POST">
      <label>&emsp;Movie name:</label>
      <input type="text" name = "Movie_name" required><br><br>

      <label>&emsp;Year of Release:</label>
      <input type="int" name="Year_of_release" required><br><br>

      <label>&emsp;Movie rating (1-5):</label>
      <input type="int" name="Rating"><br><br>

      <label>&emsp;Select a genre:</label>
      <select name="Genre">
        <?php
          //Set values for dropdown list
          while ($genre_id = mysqli_fetch_array(
            $all_genres,MYSQLI_ASSOC)):; 
        ?>
        <option value="<?php echo $genre_id["gid"];
        ?>">
          <?php echo $genre_id["mgenre"];
         ?>
        </option>
      <?php
          endwhile;
      ?>
    </select>
    <br><br>

  <!-- Create submit button -->
  &emsp;&emsp;<input type="submit" value="Submit">

  <!-- Create button for redirecting to showmovies -->
&emsp;<input type="button" onclick= "location.href = '/IMS_2022/showmovies.php';" value="View all submitted movies">
            </form>
            </td><br><br>


</body>
</html>

