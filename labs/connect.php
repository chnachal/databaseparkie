
<?php 
$mysqli = new mysqli("parkieserver.mysql.database.azure.com", "parkieser@parkieserver", "americanUSA1", "parkiedb");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";

?>
