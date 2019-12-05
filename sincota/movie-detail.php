<?php require 'function.php';




$data = query("SELECT id_film,genre,judul,video,gambar,jadwal FROM film INNER JOIN genre ON film.id_genre = genre.id_genre  ");


if (isset($_POST["cari"])) {
    $data = cari($_POST["keyword"]);
}






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>SINCOTA</title>
</head>
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand judul" href="#">SINCOTA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Jenis Genre
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php $genre = mysqli_query($conn, "SELECT * FROM genre");
                            while ($rr = mysqli_fetch_array($genre)) { ?>
                                <option value=" <?php echo $rr[id_genre]  ?> "><?php echo $rr['genre'] ?></option>
                            <?php } ?>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0" action="" method="post">
                <input class="form-control mr-sm-2" name="keyword" type="text" placeholder="Search..." autofocus aria-label="Search" size="40">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit" name="cari">Search</button>
            </form>
        </div>
    </nav>
    <br>
    <br>


    <?php

    foreach ($data as $row) :

        ?>
        <div name="ancor" id="ancor<?= $row['id_film']; ?>">
            <div style="width: 100%;">
                <ul class=" container list-group">
                    <li class="list-group-item">Judul: <?= $row["judul"];  ?></li>
                    <li class="list-group-item">Publish on: <?= $row["jadwal"];  ?></li>
                    <li class="list-group-item">Genre: <?= $row["genre"];  ?></li>
                </ul>
                <div class="container card">
                    <iframe src="admin/file/<?= $row["video"];  ?>" class="card-img-top" class="card-body" style="width: 99%;  height: 400px;"></iframe>
                </div>
            </div>
        </div>
        <br><br><br><br><br>

    <?php endforeach; ?>








    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>