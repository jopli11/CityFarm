const countdown = document.getElementById('timer');
let timeLeft = 60 * 60; // 1 hour in seconds

const timer = setInterval(() => {
    const minutes = Math.floor(timeLeft / 60);
    let seconds = timeLeft % 60;

    seconds = seconds < 10 ? '0' + seconds : seconds;

    countdown.textContent = `${minutes}:${seconds}`;

    if (timeLeft <= 0) {
        clearInterval(timer);
        countdown.textContent = 'Time\'s up!';
    }

    timeLeft--;
}, 1000);