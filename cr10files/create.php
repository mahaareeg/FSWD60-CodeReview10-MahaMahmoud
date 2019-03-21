
<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD | Add Cd</title>

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
   <legend>Add Media</legend>

   <form action="actions/a_create.php" method="post">
       <table cellspacing="0" cellpadding="0">

        <tr>
               
               <th>Title</th>
               <td><input type="text" name="title" placeholder="Title" /></td>
           </tr>     
           <tr>
               <th>Author</th>
               <td><input type="text" name="author" placeholder="Author" /></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><input type="text" name="type" placeholder="Type" /></td>
           </tr>
           <tr>
               <td><button type="submit">Insert Media</button></td>
               <td><a href="index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>