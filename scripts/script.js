function addEventListeners() {
    var cards = document.getElementsByClassName('card');
    for (let i=0; i<cards.length; i++) {
        cards[i].addEventListener('click', function(e){
           description = this.getElementsByClassName('description')[0];
           console.log(description.innerHTML);
        })
    }
};

addEventListeners();