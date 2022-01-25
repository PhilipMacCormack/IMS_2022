<!DOCTYPE html>
<html>
<body>

<h1>Movie Database</h1>

<form action="/Repository/Repository/add_record.php">
  <label for="mname">Movie name:</label>
  <input type="text" id="mname" name="mname"><br><br>
  <label for="myear">Movie year:</label>
  <input type="int" id="myear" name="myear"><br><br>
  <label for="mrating">Movie rating(1-5):</label>
  <input type="int" id="mrating" name="mrating"><br><br>
  <label for="mgenreid">Choose a genre:</label>
  <select name="mgenre" id="gid"><br><br>   
      <option value="Action/Adventure">Action/Adventure</option>
      <option value="Comedy">Comedy</option>
      <option value="Drama">Drama</option>
      <option value="Fantasy/Sci-Fi">Fantasy/Sci-Fi</option>

  <input type="submit" value="Submit">

<form action="/Repository/Repository/movies_page.php">
    <input type ="submit" value="View all Movies submitted">
</form>


</body>
</html>

