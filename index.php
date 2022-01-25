<!DOCTYPE html>
<html>
<body>

<h1>Movie Database</h1>

<form action="/IMS_2022/insert.php">
  <label for="name">Movie name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="year">Movie year:</label>
  <input type="int" id="year" name="year"><br><br>
  <label for="rating">Movie rating (1-5):</label>
  <input type="int" id="rating" name="rating"><br><br>
  <label for="genre">Choose a genre:</label>
  <select name="genre" id="genre"><br><br>   
      <option value="Action/Adventure">Action/Adventure</option>
      <option value="Comedy">Comedy</option>
      <option value="Drama">Drama</option>
      <option value="Fantasy/Sci-Fi">Fantasy/Sci-Fi</option>

  <input type="submit" value="Submit">

<a href="showmovies.php">View all submitted Movies</a>


</body>
</html>

