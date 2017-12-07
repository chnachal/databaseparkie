<?php 
$connection = mysqli_connect("parkieserver.mysql.database.azure.com", "parkieser@parkieserver", "americaUSA1", "parkiedb");
$deviceid = $_GET['deviceis']; $statusID = $_GET['statusID']; 
$sql = "INSERT INTO parkiedb.parkiet (deviceid, statusID) VALUES ('20', '20')";
if(mysqli_query($connection, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
?>
