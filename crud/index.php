<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD</title>

   <style type="text/css">
       .manageUser {
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

<div class="manageCds">
   <a href="create.php"><button type="button">Add Cd</button></a>
   <table border="1" cellspacing="0" cellpadding="0">
       <thead>
           <tr>
               <th>Title</th>
               <th>Author</th>
               <th>Option</th>
           </tr>
       </thead>
       <tbody>
                   <?php
           $sql = "SELECT * FROM cds WHERE active = 0";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                   echo "<tr>
                       <td>".$row['title']." ".$row['author']."</td>
                       <td>".$row['publisher']."</td>
                       <td>
                           <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
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