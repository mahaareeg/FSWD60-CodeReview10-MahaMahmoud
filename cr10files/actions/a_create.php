<?php 

require_once 'db_connect.php';

if($_POST) {
  
   $title = $_POST['title'];
   $author = $_POST['author'];
   $type = $_POST['type'];
   

   $sql = "INSERT INTO media (title,author,type) VALUES ('$title','$author','$type')";
   if($connect->query($sql) === true) {
       echo "<p>New Record Successfully Created</p>";
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
       echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }
}
   $connect->close();


?>