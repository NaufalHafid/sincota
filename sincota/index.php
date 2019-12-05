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
  <style>
    body {
      background-color: #2f2f2f;
    }

    img {
      height: 500px;
    }
  </style>

  <title>SINCOTA</title>
</head>
</style>

<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark ">
    <div class=" navbar-inverse container">
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
              <a class="dropdown-item" href=""><?php $genre = mysqli_query($conn, "SELECT * FROM genre");
                                                while ($rr = mysqli_fetch_array($genre)) { ?>
                  <option value=" <?php echo $rr[id_genre]  ?> "><?php echo $rr['genre'] ?></option>
                <?php } ?>
              </a>
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

  <div class="container center">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" style=" height: 600px">
        <div class="carousel-item active">
          <img src="img/marvel.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/dc.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/spiderman.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/joker.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/cars.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/frozen.jpg" class="d-block w-100">
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br><br><br>


  <div class="container">
    <h1 class="display-5 judul-content" style="color:#ffff;">List Movie</h1>


    <div class="row">
      <?php foreach ($data as $row) : ?>
        <div class="col-sm-3">
          <a style="text-decoration:none; color:black; " href="movie-detail.php#ancor<?= $row['id_film']; ?>">
            <div class="card" style="width: 16rem; height: 300px;">
              <img src="admin/file/<?= $row["gambar"];  ?>" class="card-img-top" class="card-body" style="width: 254px;  height: 200px;">
              <div>
                <p class="card-text"><?= $row['judul']; ?><br><?= $row['genre']; ?></p>

              </div>
            </div>
          </a>
        </div>
        <br>

      <?php endforeach; ?>
    </div>


    <br>
    <div class="offset-10 container">
      <a class="btn btn-outline-warning" href="index.php">UP</a>
    </div>

  </div>
  <br><br><br><br><br><br><br><br><br>

  <div class="row footer" style="heigh:100px;">
    <div class="col text-center">
      <p style="color:#fff;">2019 All Right Resevered by Naufal Hafid</p>
    </div>
  </div>
  <br>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>