<?php
$conn = mysqli_connect("localhost","root","root","movies_db");


//Function for deleting a record using the mid, if the query gives 0 results, give error message
function deleteRecord(mysqli $conn, $id){
    $sql = "DELETE FROM `movies` WHERE mid = '".$id."'";
    $result1 = $conn->query($sql);
    if(!$result1){
        throw new Exception(message: 'Cannot delete record');
    }
}

?>

