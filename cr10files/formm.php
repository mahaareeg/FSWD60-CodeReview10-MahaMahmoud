<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Data to Form</title>
<link rel="stylesheet" type="text/css" href="datab1.css">
</head>
<body>
  <div class="container">
<form action="insertdb.php" method="post">
  <p>
       
   <p>
       <label for="title">Title:</label>
       <input type="text" name="title" id="title">
   </p>
   <p>
       <label for="author">Authors:</label>
       <input type="text" name="author" id="author">
   </p>
   <p>
       <label for="type">Type:</label>
       <input type="text" name="type" id="type">
   </p>
   <input type="submit" value="Submit">
</form>

</div>
</body>
</html>