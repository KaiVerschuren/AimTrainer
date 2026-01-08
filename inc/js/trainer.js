let target = document.querySelector('.trainer-target');
let counter = document.querySelector('.trainer-counter');

function getRandomPosition() {
    // get random number between 0-80 and add 10
    let top = Math.floor(Math.random() * 80) + 10;
    let left = Math.floor(Math.random() * 80) + 10;
    return { top, left };
}

function changeTargetPosition() {
    let position = getRandomPosition();
    target.style.top = position.top + '%';
    target.style.left = position.left + '%';
}

target.addEventListener('click', () => {
        changeTargetPosition();
});
