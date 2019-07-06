function addEventListeners() {
    var cards = document.getElementsByClassName('card');
    for (let i=0; i<cards.length; i++) {
        cards[i].addEventListener('click', function(e){
           document.getElementById('dropdown-content').style.display = 'block';
        });
    }
}


function closeOverlay() {
    document.getElementById('overlay-wrapper').style.display = 'none';
}


addEventListeners();