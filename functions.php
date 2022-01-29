<?php
$conn = mysqli_connect("localhost","root","root","movies_db");


//Delete record
function deleteRecord(mysqli $conn, $id){
    $sql = "DELETE FROM `movies` WHERE mid = '".$id."'";
    $result1 = $conn->query($sql);
    if(!$result1){
        throw new Exception(message: 'Cannot delete record');
    }
}

?>

