<?php
echo ("<html><body>");
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
// Escape user inputs for security
$book_id = mysqli_real_escape_string($conn, $_POST['book_id']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$author = mysqli_real_escape_string($conn, $_POST['author']);
$publisher = mysqli_real_escape_string($conn, $_POST['publisher']);
// attempt insert query execution
$sql = "INSERT INTO books (book_id, title, author, publisher) VALUES ('$book_id','$title', '$author', '$publisher')";
if (mysqli_query($conn, $sql)) {
   echo "<h1>New record created.<h1>";
} else {
   echo "<h1>Record creation error for: </h1>" . 
         "<p>" . $sql . "</p>" . 
         mysqli_error($conn);
}
mysqli_close($conn);
echo "</body></html>";
?>