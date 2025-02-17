<?php
include "assets/translate.php";
?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['titulo'] ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000">
            <img src="assets/img/logo.gif" width="50" height="" class="d-inline-block align-top" id="logo" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $lang['home'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $lang['sobre'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $lang['contato'] ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $lang['idioma'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.php?lang=pt"><?php echo $lang['pt'] ?></a>
                            <a class="dropdown-item" href="index.php?lang=en"><?php echo $lang['en'] ?></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Jumbotron -->
    <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $lang['h1'] ?></h1>
            <p class="lead">
              <?php echo $lang['descricao'] ?>
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small black">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">©2021 Copyright:
            <a href="https://marcelomartins.tech"> MARCELO MARTINS</a>
        </div>
        <!-- Copyright -->

    </footer>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>