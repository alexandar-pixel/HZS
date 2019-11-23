<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mladi Danas</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <?php require "bazaJson/pravljenje/pravljenjeJson.php"; ?>

</head>
<body>
    <div class="navbarglavni">
    <nav class="navbar navbar-expand-md navbar-dark flex-top">
        <a class="navbar-brand" href="index.html" style="font-size: 26px; pointer-events: none;">MLADI DANAS<a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#" id = "item">Početna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="koncerti.html" id = "item" style="color: white;">Koncerti</a>
                </li>
            <li class="nav-item">
              <a class="nav-link" href="pozoriste.html" id = "item">Pozorište</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="izlozbe.html" id = "item">Izložbe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="meetup.html" id = "item">MeetUP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="filmovi.html" id = "item">Filmovi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kontakt.html" id = "item">Kontakt</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="aktuelno">
        <br>
        <div class="aktuelno1">
            
            AKTUELNO
            <p class="aktuelnop">Budite u koraku sa vremenom</p>
        </div>
        <br>
    </div>

    </div>

        <?php
            $json = file_get_contents("jsonIzBaze.json"); # ucitavanje json fajla
            $jsonNiz = json_decode($json); # dekodiranje json-a u niz da bi php mogao da ga cita
            $slike = array();
            $nazivi = array();
            $vrste = array();
            $datumi = array();

            foreach($jsonNiz->istaknuto as $e){
                array_push($slike, $e->slikaPut);
                array_push($nazivi, $e->naziv);
                array_push($vrste, $e->vrsta);
                array_push($datumi, $e->datum);
            }
        ?>

            <div class= "istaknuto">   
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 " src=<?php echo $slike[0] ?> alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $nazivi[0] ?></h5>
                                <p><?php echo $vrste[0]; echo " "; echo $datumi[0] ?></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src=<?php echo $slike[1] ?> alt="Second slide" >
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $nazivi[1] ?></h5>
                                <p><?php echo $vrste[1]; echo " "; echo $datumi[1] ?></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src=<?php echo $slike[2] ?> alt="Second slide" >
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $nazivi[2] ?></h5>
                                <p><?php echo $vrste[2]; echo " "; echo $datumi[2] ?></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
   
    </div>
    <h1 class="koncertiH1">KONCERTI</h1>
    <hr class="style-four">
    <br>
    <br>
    <br>
    <h1 class="koncertiH1">IZLOŽBE</h1>
    <hr class="style-four">
    <br>
    <br>
    <br>
    <h1 class="koncertiH1">POZORIŠTE</h1>
    <hr class="style-four">
    <br>
    <br>
    <br>
    <h1 class="koncertiH1">MEET UP</h1>
    <hr class="style-four">
    <br>
    <br>
    <br>
    <h1 class="koncertiH1">FILMOVI</h1>
    <hr class="style-four">
    <br>
    <br>
    <br>

    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3" style="background-color: rgb(0, 132, 255)">© 2019 Copyright:
            <a href="www.mladidanas.com" style="color: black;"> MladiDanas.com</a>
        </div>         
    </footer>
    
    <script type="text/javascript" src="bootstrap/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>