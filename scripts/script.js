function addEventListeners() {
    var cards = document.getElementsByClassName('collapsible');
    for (let i=0; i<cards.length; i++) {
        cards[i].addEventListener('click', function(e){
            this.classList.toggle('active');
            var sibling = this.nextElementSibling;
            if (sibling.style.display === 'block') {
                sibling.style.display = 'none';
            } else {
                sibling.style.display = 'block';
                sibling.scrollIntoView({behavior: 'smooth', block: 'center'});
            }
        });
    }
}

addEventListeners();