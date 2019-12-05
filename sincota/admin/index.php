<?php $conn = mysqli_connect('localhost', 'root', '', 'sincota') ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>ADMIN </title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php?=admin" disabel>ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="../index.php" style="color:red;">Halaman User</a>
                    <a class=" nav-item nav-link" href="index.php?p=film">Data Film</a>
                    <a class="nav-item nav-link" href="index.php?p=genre">Data Genre</a>
                </div>
            </div>
        </div>
    </nav>





</body>

</html>

<?php

if (@$_GET['p'] == "") {
    include_once 'admin.php';
} elseif (@$_GET['p'] == "admin") {
    include_once 'admin.php';
} elseif (@$_GET['p'] == "film") {
    include_once 'film.php';
} elseif (@$_GET['p'] == "genre") {
    include_once 'genre.php';
} elseif (@$_GET['p'] == "inputfilm") {
    include_once 'input_film.php';
} elseif (@$_GET['p'] == "inputgenre") {
    include_once 'input_genre.php';
}


?>