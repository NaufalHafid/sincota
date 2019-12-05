<?php

require '../function.php';

if (isset($_GET["id"])) {

	$id = $_GET["id"];

	$q = "DELETE FROM film WHERE id_film='$id' ";
	$hasil_q = mysqli_query($conn, $q);

	if (!$hasil_q) {
		die("Gagal menghapus data:" . mysqli_errno($conn) .
			" - " . mysqli_error($conn));
	}
}

header("location:index.php?p=film");
