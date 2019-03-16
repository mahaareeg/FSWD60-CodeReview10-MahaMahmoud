
<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD  |  Add Cd</title>

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
   <legend>Add CD</legend>

   <form action="actions/a_create.php" method="post">
       <table cellspacing="0" cellpadding="0">
           <tr>
               <th>Title</th>
               <td><input type="text" name="title" placeholder="title" /></td>
           </tr>     
           <tr>
               <th>Author</th>
               <td><input type="text" name="author" placeholder="Author" /></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text" name="publisher" placeholder="Publisher" /></td>
           </tr>
           <tr>
               <td><button type="submit">Insert cd</button></td>
               <td><a href="index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>