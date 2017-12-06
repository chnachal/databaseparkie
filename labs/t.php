<?php 
$connection = mysqli_connect("parkieserver.mysql.database.azure.com", "parkieser@parkieserver", "americaUSA1", "parkiedb");
$deviceid = $_POST['deviceis']; $statusID = $_POST['statusID']; 
$sql = "INSERT INTO parkiedb.parkie (deviceid, statusID) VALUES ('20171201', 'NotAvail')";
if(mysqli_query($connection, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
?>