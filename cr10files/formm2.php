<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cr10_maha_mahmoud_biglibrary";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "INSERT INTO books (book_id, title, author, publisher)
VALUES (45,'Becoming', 'Michelle Obama', 'Crown Publishing Group; First Edition edition')";
if (mysqli_query($conn, $sql)) {
   echo "New record created.\n";
} else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}
mysqli_close($conn);
?>