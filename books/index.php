<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
Search by Genre
</title>
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/fontawesome-all.min.css" rel="stylesheet">
  </head>
  <body>



<div class="container">
	<div class="row">
		<div class="col-xl-12">

      	<h1 class="mt-5">Find books from a specific cultural group by selecting from the drop-down lost below.</h1>
        <h3> Let's celebrate multicultural writers. Select a cultural group below, and see a list of books within that group. Select a book to learn more about the author. The book list was taken from <a href="https://www.goodreads.com/shelf/show/multicultural-literature"> Goodreads </a></h3>

		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-md-10 col-sm-12 alert alert-warning p-4">


<form action="genres.php" method="post"
  class="form" role="form">






<div class="form-group "><label class="form-control-label" for="culture_choice">Select cultural group</label>

          <select class="form-control" id="culture_choice" name="culture_choice">
            <option value="Hispanic">Hispanic</option>
            <option value="Black/African-American">Black/African-American</option>
            <option value="East Asian">East Asian</option>
            <option value="South Asian">South Asian</option>
            <option value="Native American">Native American</option>
            <option value="Western European">Western Eurpoean</option>
            <option value="Middle Eastern">Middle Eastern</option>
            <option value="West Indian">West Indian</option>
            <option value="Eastern European">Eastern European</option>
            <option value="Cross-Cultural">Cross-Cultural</option>
            <option value="Other">Other</option>
          </select>

  </div>

    <input class="btn btn-primary" id="submit" name="submit" type="submit" value="Search">


</form>

		</div>
	</div>
</div>

<footer><button type = "button"><a href= "https://github.com/pmohan17/multicultural-books"> Return to Search </a></button> Created by Priya Mohan</footer>
  </body>
</html>
