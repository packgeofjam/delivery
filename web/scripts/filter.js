let buttons = document.querySelectorAll('.menu')
let category = new Map([
    ['popular', document.querySelectorAll('.popular')],
    ['pizza', document.querySelectorAll('.pizza')],
    ['burger', document.querySelectorAll('.burger')],
    ['snacks', document.querySelectorAll('.snacks')],
    ['other', document.querySelectorAll('.other')],
    ['coffee', document.querySelectorAll('.coffee')],
    ['limonade', document.querySelectorAll('.limonade')],
    ['milkshake', document.querySelectorAll('.milkshake')],
]);
let allCards = document.querySelectorAll('.catalog-item')
function DisplayCards(cat) {
    allCards.forEach((card) => {
    card.style.display = 'none'
    })
    category.get(cat).forEach((card) => {
    card.style.display = 'flex';
    })
}
for (let button of buttons) {
    button.addEventListener("click", function() {
    if (!button.classList.contains("button-active")) {
    console.log("Нажатие на неактивную кнопку")
    buttons.forEach((button) => {
    button.classList.remove("button-active") // убираем класс у всех кнопок
    this.classList.add("button-active") // добавляем класс к нажатой кнопке
    })
    DisplayCards(this.dataset.category)
    } else {
    console.log("Нажатие на активную кнопку")
    }
    })
}