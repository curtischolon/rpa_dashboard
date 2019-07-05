function addEventListeners() {
    var cards = document.getElementsByClassName('card');
    for (let i=0; i<cards.length; i++) {
        cards[i].addEventListener('click', function(e){
           description = this.getElementsByClassName('description')[0].innerHTML;
           notes = this.getElementsByClassName('notes')[0].innerHTML;
           roi = this.getElementsByClassName('roi')[0].innerHTML;

           document.getElementById('description-content').innerHTML = description;
           document.getElementById('roi-content').innerHTML = roi;
           document.getElementById('notes-content').innerHTML = notes;
           document.getElementById('overlay-wrapper').style.display = 'block';
        });
    }
}


function closeOverlay() {
    document.getElementById('overlay-wrapper').style.display = 'none';
}


addEventListeners();