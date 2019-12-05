<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-color: #acacac;
        }

        .card {
            width: 600px;

        }
    </style>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark navbar-fixed-top">
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
    <br><br>

    <div class="card d-flex container center">
        <br>
        <div class="card-header text-center">
            <h1 class="display-4">Contact</h1>
            <img src="img/nopal.jpg" style="border-radius:360px; width:150px; ">
        </div>
        <ul class="list-group ">
            <h4 class=" list-group-item"><i class="material-icons">
                    perm_identity
                </i>
                Naufal Hafid Mardhatillah
            </h4>
            <h4 class="list-group-item"><i class="material-icons">
                    mail_outline
                </i> naufalhafid46@gmail.com</h4>
            <h4 class="list-group-item">
                <i class="material-icons">
                    phone
                </i> +6281371921667
            </h4>
            <h4 class="list-group-item">
                <i class="material-icons">
                    photo_camera
                </i> @nopaaaaall
            </h4>
            <h4 class="list-group-item">
                <i class="material-icons">
                    message
                </i> Naufal Hafid
            </h4>
        </ul>
        <br>
    </div>

    <div class="row footer" style="heigh:100px; position: absolute;
	bottom: 0;
	width: 100%;
	height: 70px;
	background-color: #333;
	font-size: 1.2em;
	padding-top: 30px;">
        <div class="col text-center">
            <p style="color:#fff;">2019 All Right Resevered by Naufal Hafid</p>
        </div>
    </div>
    <br>


</body>

</html>