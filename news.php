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

	<div class="nav-pills">
		<ul class="nav nav-pills">
		  <li class="nav-item">
		    <a class="nav-link" href="#">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active" href="#">News</a>
		  </li>
		</ul>
		<div id="">
			<?php/*
				$news = getNews();
				//$this->data = $data;
				foreach($news as $row)
				{
					echo "<h3>".$row["title"]."</h3>";
					echo "<p>".$row["content"]."</p>";
				}*/
			?>
		</div>
	</div>

</body>
</html>