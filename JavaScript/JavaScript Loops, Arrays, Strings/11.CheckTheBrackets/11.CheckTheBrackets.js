function checkBrackets(value) {
    var str = value;
    var openingNum = 0;
    for (var i = 0; i < str.length; i++) {
        if (str[i] == '(') {
            openingNum++;
        }
        if (str[i] == ')') {
            openingNum--;
            if (openingNum<0) {
                console.log('incorrect');
                return;
            }
        }
    }

    if (openingNum>0) {
        console.log('incorrect');
    } else {
        console.log('correct');
    }
}

checkBrackets('( ( a + b ) / 5 – d )');
checkBrackets(') ( a + b ) )');
checkBrackets('( b * ( c + d *2 / ( 2 + ( 12 – c / ( a + 3 ) ) ) )');