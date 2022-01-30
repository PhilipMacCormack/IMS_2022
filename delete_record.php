<html>
<?php
require_once 'functions.php';
require_once 'db.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Requests id from delete button that was pressed
$id=$_REQUEST['id'];

// Calls to deleteRecord function in functions.php to delete the record with id= $id
deleteRecord($conn,$id);

// Instantly redirects to showmovies page
header("Location: /IMS_2022/showmovies.php");
die;

