﻿function lastDigitAsText(number) {
    var str = number.toString();
    var lastDigit = str[str.length - 1];
    var result;

    switch (Number(lastDigit)) {
        case 0: result = 'zero'; break;
        case 1: result = 'one'; break;
        case 2: result = 'two'; break;
        case 3: result = 'three'; break;
        case 4: result = 'four'; break;
        case 5: result = 'five'; break;
        case 6: result = 'six'; break;
        case 7: result = 'seven'; break;
        case 8: result = 'eight'; break;
        case 9: result = 'nine'; break;

        default: result = 'Incorrect input';
    }

    console.log(result);
}

lastDigitAsText(6);
lastDigitAsText(-55);
lastDigitAsText(133);
lastDigitAsText(14567);