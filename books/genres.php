<?php
  $genre = $_POST['culture_choice'];
	include 'database.php';
	$query = "SELECT * FROM books WHERE cultural_group = '".$genre."' ORDER BY titles";
	$books = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List of Books by Genre</title>
    <link rel="stylesheet" href="css/genres.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  </head>
  <body>
  <table>
    	<tr>
    	  <th>Book Title</th>
    	  <th>Author</th>
    	</tr>

      <?php while ($row = mysqli_fetch_assoc($books)) :  ?>
        <tr>
        <td><a href="book.php?id=<?php echo $row['id']; ?>"><?php  echo stripslashes($row['titles']);?></a></td>
        <td><?php echo $row['authors']; ?></td>
      </tr>
      <?php endwhile;  ?>
    </table>
<button type = "button"><a href= "index.php"> Return to Search </a></button>
  </body>
</html>
