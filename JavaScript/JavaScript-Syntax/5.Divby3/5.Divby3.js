function divisionBy3(value) {
    var digits = new Array(value.toString().length);
    var index = 1;
    while (index <= digits.length) {
        digits[index - 1] = value % 10;
        value = Math.floor(value / 10);
        index++;
    }

    var digitSum = 0;
    for (var i = 0; i < digits.length; i+=1) {
        digitSum += digits[i];
    }

    if (digitSum%3==0) {
        console.log('the number is divided by 3 without remainder');
    } else {
        console.log('the number is not divided by 3 without remainder');
    }

    
}

divisionBy3(7);
divisionBy3(190);
divisionBy3(1890);
divisionBy3(591);


