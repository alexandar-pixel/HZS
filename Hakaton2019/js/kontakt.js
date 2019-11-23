let posalji = document.getElementById('posalji');

posalji.addEventListener('click', izvrsi);


function izvrsi()
{
    let ime = document.getElementById("name").Value;
    let prezime = document.getElementById('lastname');
    let broj = document.getElementById('number');
    let email = document.getElementById('email');
    let sadrzina = document.getElementById("fulltext").Value;
    //proveri
    //kaze undifined kada se klikne posalji, sigurno neka glupa greska
    console.log(ime);
    //TODO Check for validity
}
