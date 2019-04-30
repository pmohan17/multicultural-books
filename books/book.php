<?php
  $id = $_GET['id'];
	include 'database.php';
	$query = "SELECT * FROM books WHERE id = '".$id."' ORDER BY titles";
	$books = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
Search by Genre
</title>
    <link rel="stylesheet" href="css/books.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  </head>
  <body>
<table>
<?php while ($row = mysqli_fetch_assoc($books)) :  ?>
  <tr>
  <td><?php echo $row['info']; ?></td>
</tr>
<?php endwhile;  ?>
</table>
<button type = "button"><a href= "index.php"> Return to Search </a></button>
</body>
</html>
