<?php 

require_once 'db_connect.php';

if($_POST) {
   $tit = $_POST['title'];
   $auth = $_POST['author'];
   $pub = $_POST['publisher'];

   $id = $_POST['id'];

   $sql = "UPDATE cds SET title = '$tit', author = '$auth', publisher = '$pub' WHERE id = {$id}";
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