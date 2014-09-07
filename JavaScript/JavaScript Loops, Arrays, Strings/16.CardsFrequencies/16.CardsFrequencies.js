function findCardFrequency(value) {
    value = value.split(' ');
    var cards = {};

    for (var i = 0; i < value.length; i++) {
        var prop = '';
        for (var j = 0; j < value[i].length; j++) {
            if (value[i][j] != '\u2665' && value[i][j] != '\u2663' && value[i][j] != '\u2666' && value[i][j] != '\u2660') {
                prop += value[i][j];
            }
        }
        
        if (cards.hasOwnProperty(prop)) {
            cards[prop] += 1;
        } else {
            cards[prop] = 1;
        }
    }
    
    for (var prop in cards) {
        cards[prop] = ((cards[prop] / value.length) * 100).toFixed(2);
        console.log(prop+'->'+cards[prop]+'%');
    }
    console.log();
}

findCardFrequency('8♥ 2♣ 4♦ 10♦ J♥ A♠ K♦ 10♥ K♠ K♦');
findCardFrequency('J♥ 2♣ 2♦ 2♥ 2♦ 2♠ 2♦ J♥ 2♠');
findCardFrequency('10♣ 10♥');
