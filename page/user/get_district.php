<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "document";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName) or die('Error connection database!');
mysqli_set_charset($conn, 'utf8');

$sql = "SELECT * FROM district WHERE province_id = {$_GET['province_id']}";
$query = mysqli_query($conn, $sql);
 
$json = array();
while($result = mysqli_fetch_assoc($query)) {    
    array_push($json, $result);
}
echo json_encode($json);