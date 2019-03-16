<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Form</title>
<link rel="stylesheet" type="text/css" href="datab1.css">
</head>
<body>
	<div class="media">
		<h1> Media List of our Library</h1> 
		<div class="med">
	<h2> BOOKS</h2>
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
// attempt insert query execution

 $sql = "SELECT book_id, title, author FROM books";
    $result = mysqli_query($conn, $sql);
    // fetch the next row (as long as there are any) into $row    

    while($row = mysqli_fetch_assoc($result)) {
        printf("ID=%s %s (%s) <br>",
            $row["book_id"], $row["title"], $row["author"]) ;
    }
    echo "<br> </div>";

    echo "<div class='med1'><br> ";
    echo "<br>";
    echo "<br> <h2> CDS</h2>";
    
    $sql = "SELECT cd_id, title, author FROM cds";
    $result = mysqli_query($conn, $sql);
    // fetch the next row (as long as there are any) into $row    

    while($row = mysqli_fetch_assoc($result)) {
        printf("ID=%s %s (%s) <br>",
            $row["cd_id"], $row["title"], $row["author"]) ;
    }
    echo "<br> </div>";
    echo "<div class='med2'<br>";
    
    echo "<br> <h2> DVDS</h2>";
    
    $sql = "SELECT dvd_id, title, director FROM dvds";
    $result = mysqli_query($conn, $sql);
    // fetch the next row (as long as there are any) into $row    

    while($row = mysqli_fetch_assoc($result)) {
        printf("ID=%s %s (%s) <br>",
            $row["dvd_id"], $row["title"], $row["director"]) ;
        

    }

    // Free result set
    mysqli_free_result($result);
    mysqli_close($conn);
    echo "<br> </div>";
?>
</div>
</body>
</html>