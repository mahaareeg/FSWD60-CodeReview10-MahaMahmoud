<?php 

require 'actions/db_connect.php';

if($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE media_id = {$id}";
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title>Edit Media</title>

   <style type="text/css">
       fieldset {
           margin: auto;
           margin-top: 100px;
           width: 50%;
       }

       table tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update Media</legend>

   <form action="actions/a_update.php" method="post">
       <table cellspacing="0" cellpadding="0">
           <tr>
               <th>Title</th>
               <td><input type="text" name="title" placeholder="Title" value="<?php echo $data['title'] ?>" /></td>
           </tr>     
           <tr>
               <th>Author</th>
               <td><input type="text" name="author" placeholder="Author" value="<?php echo $data['author'] ?>" /></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><input type="text" name="type" placeholder="Type" value="<?php echo $data['type'] ?>" /></td>
           </tr> 
           <tr>
               <input type="hidden" name="id" value="<?php echo $data['media_id']?>" />
               <td><button type="submit">Save Changes</button></td>
               <td><a href="index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>

<?php
}
?>