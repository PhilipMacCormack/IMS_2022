<html>
<?php
require_once 'functions.php';
require_once 'db.php';

$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_REQUEST['id'];

deleteRecord($conn,$id);

header("Location: /IMS_2022/showmovies.php");
die;

