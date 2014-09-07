alert('Играта няма изкуствен интелект, защото не ми стигна времето. \rКомпютърът играе на случаен принцип. ');
var matrix = {
    '11': '0',
    '12': '0',
    '13': '0',
    '21': '0',
    '22': '0',
    '23': '0',
    '31': '0',
    '32': '0',
    '33': '0',
}

var indexes = [11, 12, 13, 21, 22, 23, 31, 32, 33];
var moves = 9;
var gameOver = false;
var playerWins = false;

function gameStart(id) {
    if (gameOver == false) {
        playerMoves(id);
    }
}

function gameEnd() {
    checkForWinner(11, 12, 13);
    checkForWinner(21, 22, 23);
    checkForWinner(31, 32, 33);
    checkForWinner(11, 21, 31);
    checkForWinner(12, 22, 32);
    checkForWinner(13, 23, 33);
    checkForWinner(11, 22, 33);
    checkForWinner(13, 22, 31);
}

function playerMoves(id) {
    while (matrix[id] == 1 || matrix[id] == 2) {
        return;
    }
    document.getElementById(id).style.backgroundImage = 'URL("http://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Red_x.svg/600px-Red_x.svg.png")';
    matrix[id] = 1;
    gameEnd();
    if (moves < 2||gameOver) {
        return;
    }
    pcMoves();
    moves--;
}

function pcMoves() {
    if (moves < 1||gameOver) {
        return;
    }
    var random = 20;
    while ((matrix[random] == 1) || (matrix[random] == 2) || (random != 11 & random != 12 & random != 13 & random != 21 & random != 22 & random != 23 & random != 31 & random != 32 & random != 33)) {
        random = indexes[Math.round(Math.random() * 10)];
    }
    document.getElementById(random).style.backgroundImage = 'URL("http://etc-mysitemyway.s3.amazonaws.com/icons/legacy-previews/icons/blue-jelly-icons-symbols-shapes/017873-blue-jelly-icon-symbols-shapes-shapes-circle-frame.png")';
    matrix[random] = 2;
    gameEnd();
    moves--;
}

function checkForWinner(element1, element2, element3) {
    if (matrix[element1] == 1 && matrix[element2] == 1 && matrix[element3] == 1) {
        document.getElementById(element1).style.backgroundColor = 'green';
        document.getElementById(element2).style.backgroundColor = 'green';
        document.getElementById(element3).style.backgroundColor = 'green';
        gameOver = true;
        playerWins = true;
    } else if (matrix[element1] == 2 && matrix[element2] == 2 && matrix[element3] == 2) {
        document.getElementById(element1).style.backgroundColor = 'green';
        document.getElementById(element2).style.backgroundColor = 'green';
        document.getElementById(element3).style.backgroundColor = 'green';
        gameOver = true;
    }
}



