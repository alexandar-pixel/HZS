<?php

$adresaHosta = "localhost";
$korisnickoIme = "root";
$sifra = "";
$imeBaze = "hzs";
$konekcija = new mysqli($adresaHosta, $korisnickoIme, $sifra, $imeBaze) or die("Konekcija neuspešna: %s\n". $konekcija->error);
echo("uspesno povezan");