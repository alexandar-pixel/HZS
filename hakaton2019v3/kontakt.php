<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontakt</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/kontakt.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#posalji').click(function() {
                let ime = $('#ime').val();
                let prezime = $('#prezime').val();
                let broj = $('#broj').val();
                let mejl = $('#mejl').val();
                let primedba = $('#primedba').val();

                alert(ime);
            });
        });

    </script>
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
                <a class="nav-link" href="index.php" id = "item">Početna</a>
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
                    <a class="nav-link" href="filmovi.html" id = "item">Filmovi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="organizuj.html" id = "item">Organizuj Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id = "item">Kontakt</a>
                </li>
            </ul>
            </div>
        </nav>   
    </div>
    <div class="container">
        <div class="posalji">
            <p>Ime:</p>
            <input type="text" id="ime" class="form-control" placeholder="Ime">
            <p>Prezime:</p>
            <input type="text" id="prezime" class="form-control" placeholder="Prezime">
            <p>Broj Telefona:</p>
            <input type="text" id="broj" class="form-control" placeholder="Broj telefona">
            <p>E-Mail:</p>
            <input type="email" id="mejl" class="form-control" placeholder="E-Mail">
            <p>Primedba:</p>
            <textarea id="primedba" cols="40" rows="5" placeholder="Primedba" style="width: 100%; text-align: center;"></textarea>
            <p>Oceni sajt:</p>
            <form>
                <label class="radio-inline">
                    <input type="radio" name="optradio" checked value="1">  1 
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="2">  2 
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="3">  3 
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="4">  4 
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="5">  5
                </label>
            </form>
            <button id="posalji" class="btn btn-success" style="margin-top: 2em;"> Pošalji! </button>

        </div>
    </div>  
</body>
</html>