<?php

include 'function.php';
if (isset($_POST["submit"])) {

	if (tambah($_POST) > 0) {
		echo "<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href = 'index.php?p=produk';
		</script>";
	} else {
		echo "<script>
				alert('Data Gagal Ditambahkan')
				document.location.href = 'index.php';
		</script>";
	}
}

?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		body {
			background-color: #1a1a1a;
		}

		.container {
			width: 500px;
		}
	</style>
	<title>input data film</title>
</head>

<body>
	<br>
	<br>
	<br>
	<div class="list-group container">
		<form id="from_film" action="" method="post" enctype="multipart/form-data">
			<div class=" container">
				<div class="list-group-item active text-center">INPUT DATA FILM</div>

				<div class="list-group-item ">
					<label for=" judul">Judul</label>
					<input class="form-control" type="text" name="judul" id="judul">
				</div>
				<div class="list-group-item ">
					<label for="genre">Genre</label>
					<select class="custom-select" name="genre" id="genre">
						<option selected>Masukkan Pilihan</option>
						<?php
						$genre = mysqli_query($conn, "SELECT * FROM genre");
						while ($rr = mysqli_fetch_array($genre)) { ?>
							<option value="<?php echo $rr['id_genre'] ?>"> <?= $rr['genre'] . "/" . $rr['genre'] ?> </option>

						<?php }

						?>
					</select>
				</div>
				<div>
					<div class=" list-group-item">
						<label for="video">Video</label>
						<input class="form-control-file" type="file" name="video" id="video">
					</div>
					<div class=" list-group-item">
						<label for="gambar">Gambar</label>
						<input class="form-control-file" type="file" accept="image/*" name="gambar" id="gambar">
					</div>
					<div class=" list-group-item">
						<label for="jadwal">Jadwal</label>
						<input class="form-control-file" type="date" name="jadwal" id="jadwal">
					</div>

					<div class=" list-group-item">
						<button class="btn btn-outline-secondary btn-block" type="submit" name="input">INPUT DATA</button>
					</div>
				</div>
			</div>

		</form>
	</div>

	<?php
	if (isset($_POST['input'])) {

		$judul = $_POST['judul'];
		$genre = $_POST['genre'];
		$video = $_FILES['video']['name'];
		$tmp_name = $_FILES['video']['tmp_name'];
		move_uploaded_file($tmp_name, "file/" . $video);
		$gambar = $_FILES['gambar']['name'];
		$tmp_name = $_FILES['gambar']['tmp_name'];
		move_uploaded_file($tmp_name, "file/" . $gambar);


		$jadwal = $_POST['jadwal'];


		$q = "INSERT INTO film VALUES(NULL, '$judul', '$genre', '$video', '$gambar', '$jadwal' ) ";
		$r = mysqli_query($conn, $q);

		if (!$r) {
			die("Query Gagal:" . mysqli_errno($conn) . " - " . mysqli_error($conn));
		}

		header('location:index.php?p=film');
	}
	?>


</body>

</html>