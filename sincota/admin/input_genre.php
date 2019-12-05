<?php include '../function.php'; ?>



<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>input data genre</title>
</head>
<style>
	body {
		background-color: #1a1a1a;
	}
</style>

<body>
	<div class="container" style="margin-top: 150px;
		width: 300px;">
		<div class="card d-flex">
			<div class="card-header py-4 bg-light text-center">
				<h4 class="text-primary">Input Data Genre</h4>
			</div>
			<div class="card-body">
				<form id="genre" action="" method="post">
					<div class="form-group">
						<label class="form-label" for="id_genre">ID Genre : </label>
						<input type="text" class="form-control" id="id_genre" name="id_genre">
					</div>
					<div class="form-group">
						<label class="form-label" for="genre">Genre : </label>
						<input type="text" class="form-control" id="genre" name="genre">
					</div>

					<br>
					<button class="btn btn-flat btn-info" type="submit" name="input">INPUT DATA</button>

				</form>
			</div>
		</div>
	</div>

	<?php
	if (isset($_POST['input'])) {

		$id_genre = $_POST['id_genre'];
		$genre = $_POST['genre'];


		$q = "INSERT INTO genre VALUES('$id_genre',  '$genre' ) ";
		$r = mysqli_query($conn, $q);

		if (!$r) {
			die("Query Gagal:" . mysqli_errno($conn) . " - " . mysqli_error($conn));
		}

		header('location:index.php?p=genre');
	}
	?>


</body>

</html>