<?php
// defines superglobalvariables to local variables
$User = $_POST["userName"];
$Email = $_POST["userEmail"];
$Notes = $_POST["notes"];

// credentials for mariadb
$servername = "localhost";
$username = "creatinewaves";
$password = "Rivers#143";
$dbname = "requests";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//inserts info into table
$sql = "INSERT INTO requests (name, email, notes)
VALUES ('$User', '$Email`', '$Notes')";
// echo $sql;die;
if (!mysqli_query($conn, $sql)) {
    echo "Error: ";die;
}


mysqli_close($conn);

?>
<h1>Thank you for your submission!</h1>