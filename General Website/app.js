let SignedIn = false;

let NewResturant = document.getElementById('newresturants');
let Favourites = document.getElementById('favorites');
let Reviews = document.getElementById('reviews');
let Novi = document.getElementById('novi');

Favourites.addEventListener('click', OpenFavorites);
Reviews.addEventListener('click', OpenReviews);
NewResturant.addEventListener('click', NewResturants);
Novi.addEventListener('click', (evt)=>{
    evt.preventDefault();
    NewResturants();
})

function NewResturants()
{
    //TODO
}

function OpenFavorites()
{
    if(SignedIn == false)
    {
        alert('Niste se prijavili!');
    }
    else
    {
        //TODO
    }
}

function OpenReviews()
{
    if(SignedIn == false)
    {
        alert('Niste se prijavili!');
    }
    else
    {
        //TODO
    }
}