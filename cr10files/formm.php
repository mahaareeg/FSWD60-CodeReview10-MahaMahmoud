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
       <label for="book_id">Book ID:</label>
       <input type="text" name="book_id" id="Book_id">
   </p>
   <p>
       <label for="title">Title:</label>
       <input type="text" name="title" id="Title">
   </p>
   <p>
       <label for="author">Authors:</label>
       <input type="text" name="author" id="Author">
   </p>
   <p>
       <label for="publisher">Publisher:</label>
       <input type="text" name="publisher" id="publisher">
   </p>
   <input type="submit" value="Submit">
</form>
</div>
</body>
</html>