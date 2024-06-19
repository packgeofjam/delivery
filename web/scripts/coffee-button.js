document.querySelector('.coffee-button')
.addEventListener('click', function() {
    var coffeeElement = document.querySelector('.coffee');
    if (coffeeElement) {
      coffeeElement.classList.add('button-active');
      DisplayCards(this.dataset.category)
    }
        var menuButtons = document.querySelectorAll('.menu');
        menuButtons.forEach(function(button) {
          button.classList.remove('button-active');
        });
//         var coffeeButton = document.querySelector('button[data-category="coffee"]');
//   if (coffeeButton) {
//     coffeeButton.classList.add('active-button');
//   }
});