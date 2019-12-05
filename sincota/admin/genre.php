    <?php require '../function.php' ?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            body {
                background-color: #1a1a1a;
            }
        </style>
        <title>Data genre</title>
    </head>

    <body>



        <div class="jumbotron">
            <h4 class="display-4 text-center">DATA GENRE</h4>
        </div>
        <div class="container">
            <a class="btn btn-secondary  center" href="index.php?p=inputgenre">ADD+</a>
        </div>
        <br>

        <div class="container">
            <table class="table table-striped table-dark">
                <tr>
                    <th>id_genre </th>
                    <th>Genre</th>
                    <td>Hapus</td>
                </tr>


                <?php

                $q = "SELECT * FROM genre";
                $r = mysqli_query($conn, $q);

                if (!$r) {
                    die("Query Erorr: " . mysqli_errno($conn) .
                        " - " . mysqli_error($conn));
                }

                $no = 1;

                while ($data = mysqli_fetch_assoc($r)) { ?>

                    <tr>
                        <td><?= $data['id_genre'] ?></td>
                        <td><?= $data['genre'] ?></td>
                        <td><a class="btn btn-danger" href="dellete_genre.php?id=<?= $data['id_genre'] ?>"><i class="material-icons">
                                    delete_outline
                                </i></a></td>
                    </tr>



                <?php $no++;
                } ?>
            </table>
        </div>
        </div>




    </body>

    </html>