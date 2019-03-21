<?php 

require_once 'db_connect.php';

if($_POST) {
   $title = $_POST['title'];
   $author = $_POST['author'];
   $type = $_POST['type'];

  $id = $_POST['id'];

   $sql = "UPDATE media SET title = '$title', author = '$author', type = '$type' WHERE media_id = {$id}";
   if($connect->query($sql) === TRUE) {
       echo "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";
       echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
       echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>