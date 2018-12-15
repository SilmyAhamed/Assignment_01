<?php 

	include('database.php');

	function getNews()
	{
		$connection = getConnection();
		$query = 'SELECT *FROM news';
		return $data = $connection->query($query);
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Assignment 01</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<nav class="nav nav-pills flex-column flex-sm-row">
		  <a class="flex-sm-fill text-sm-center nav-link active" href="#">HOME</a>
		  <a class="flex-sm-fill text-sm-center nav-link" href="#">NEWS</a>
		</nav>
		<?php
			$news = getNews();
			//$this->data = $data;
			foreach($news as $row)
			{
				echo "<h3>".$row["title"]."</h3>";
				echo "<p>".$row["content"]."</p>";
			}
		?>
	</div>
	
</body>
</html>