window.addEventListener("keydown", checkKeyPressed, false);

var score = 0;
var move = 50;
function checkKeyPressed(e) {
    if (e.keyCode == '37') {
        if (move < 92) {
            move += 2;
        }

        document.getElementById('player').style.right = move + '%';
    }
    if (e.keyCode == "39") {
        if (move > 2) {
            move -= 2;
        }

        document.getElementById('player').style.right = move + '%';
    }
}

var index = 0;
var rocks = setInterval(function newRock() {
    index++;
    var position = Math.floor((Math.random() * 100)-5);
    var id = 'rock' + index;
    var rock = '<img src = "/images/rock.png" class="rocks" id="' + id + '" style="right:' + position + '%"/>';
    document.getElementById('wrapper').innerHTML += rock;
    var top = 1;
    var falling= setInterval(function fall() {
        if (top < 450) {
            top += 10;
            document.getElementById(id).style.top = top + 'px';
        }
        if ((top>=340&&top<=370)&&(move<position+5&&move>position-5)) {
            clearInterval(falling);
            clearInterval(rocks);
            alert('You died!');
        }
    }, 100);
    score++;
    document.getElementById('score').innerHTML = score;
}, 1000);

