<?php require 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>Add Cds</title>

   <style type="text/css">
       .manageCds {
           width: 50%;
           margin: auto;
       }

       table {
           width: 100%;
           margin-top: 20px;
       }

   </style>

</head>
<body>

<div class="manageMedia">
   <a href="create.php"><button type="button">Add Media</button></a>
   <table border="1" cellspacing="0" cellpadding="0">
       <thead>
           <tr>
            
               <th>Title</th>
               <th>Author</th>
               <th>type</th>
               
           </tr>
       </thead>
       <tbody>
                   <?php
           $sql = "SELECT * FROM media ";
           $result = $connect->query($sql);

           if($result->num_rows > 0){
               while($row = $result->fetch_assoc()) {
                   echo "<tr>
                        <td>".$row['title']."</td> <td> ".$row['author']."</td>
                       <td>".$row['type']."</td>
                       <td>
                           <a href='update.php?id=".$row['media_id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=".$row['media_id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>";
               }
           } else {
               echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           ?>
            
       </tbody>
   </table>
</div>

</body>
</html>