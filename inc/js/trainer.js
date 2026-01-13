let menu = document.querySelector('.trainer-menu');
let formTrainer = document.querySelector('.form-trainer');

let target = document.querySelector('.trainer-target');
let counter = document.querySelector('.trainer-counter');

let buttonStartHits = document.querySelector('.btnStartHits');
let buttonStartSeconds = document.querySelector('.btnStartSeconds');

let scoreInputSeconds = document.querySelector('.form-input-score-seconds');
let scoreInputHits = document.querySelector('.form-input-score-hits');

let currentSeconds = 0;
let currentHits = 0;

let gameMode = 'hits'; // 'hits' or 'seconds'

let timerHits;

function startGame() {
    menu.style.top = '100%';
    formTrainer.style.top = '100%';
}

function openEnd() {
    formTrainer.style.top = '0';
}

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

function updateCounter() {
    if (gameMode === 'hits') {
        counter.innerHTML = currentHits;
    } else {
        counter.innerHTML = currentSeconds;
    }
    scoreInputHits.value = currentHits;
    scoreInputSeconds.value = currentSeconds;
}

target.addEventListener('click', () => {
        changeTargetPosition();
        currentHits++;
        updateCounter();
        if (gameMode === 'hits' && currentHits >= 30) {
            stopTimerHits();
            openEnd();
        }
});

buttonStartHits.addEventListener('click', () => {
    gameMode = 'hits';
    currentScore = 30;
    currentHits = 0;
    startTimerHits();
    updateCounter();
    startGame();
});

buttonStartSeconds.addEventListener('click', () => {
    gameMode = 'seconds';
    currentSeconds = 30;
    currentHits = 0;
    updateCounter();
    startTimerSeconds();
    startGame();
});

function startTimerSeconds() {
    let timeLeft = currentSeconds;
    let timerInterval = setInterval(() => {
        timeLeft--;
        currentSeconds--;
        updateCounter();
        if (timeLeft <= 0) {
            clearInterval(timerInterval);
            openEnd();
        }
    }, 1000);
}
function startTimerHits() {
    let timeLeft = currentSeconds;
    timerHits = setInterval(() => {
        timeLeft++;
        currentSeconds++;
        updateCounter();
    }, 1000);
}

function stopTimerHits() {
    clearInterval(timerHits);
}
