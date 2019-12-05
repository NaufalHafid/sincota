    <?php require '../function.php' ?>
    <!doctype html>
    <html lang="en">

    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <style>
        body {
          background-color: #1a1a1a;
        }
      </style>
      <title>Data Film</title>
    </head>

    <body>


      <div class="jumbotron">
        <h1 class="display-4 text-center">DATA FILM</h1>
      </div>
      <div class="container">
        <a class="btn btn-secondary " href="input_film.php">ADD+</a>
      </div>
      <div class="container">
        <br>



        <table class="table table-striped table-dark">
          <tr>
            <th>no</th>
            <th>judul</th>
            <th>Genre</th>
            <th>video</th>
            <th>gambar</th>
            <th>Jadwal</th>
            <th>Dellete</th>
          </tr>



          <?php

          $q = "SELECT id_film,genre,judul,video,gambar,jadwal FROM film INNER JOIN genre ON film.id_genre = genre.id_genre";
          $r = mysqli_query($conn, $q);

          if (!$r) {
            die("Query Erorr: " . mysqli_errno($conn) .
              " - " . mysqli_error($conn));
          }

          $no = 1;

          while ($data = mysqli_fetch_assoc($r)) { ?>

            <tr>
              <td><?= $no; ?></td>
              <td><?= $data['judul']; ?></td>
              <td><?= $data['genre']; ?></td>
              <td><img src="file/<?= $data["video"]; ?>" style="width: 300px;"></td>
              <td><img src="file/<?= $data["gambar"]; ?>" style="width: 300px;"></td>
              <td><?= $data['jadwal']; ?></td>
              <td><a class="btn btn-danger" href="dellete_film.php?id=<?= $data['id_film']; ?>"><i class="material-icons">
                    delete_outline
                  </i></a></td>
            </tr>








          <?php $no++;
          } ?>
        </table>
      </div>




    </body>

    </html>