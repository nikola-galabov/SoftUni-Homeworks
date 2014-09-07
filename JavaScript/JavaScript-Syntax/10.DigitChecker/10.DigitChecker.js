function checkDigit(value) {
    if (Number(value).toString().length<3) {
        console.log(false);
    } else {
        value = Math.floor(value / 100);
        if (value%10==3) {
            console.log('true');
        } else {
            console.log('false');

        }
    }
}

checkDigit(1235);
checkDigit(25368);
checkDigit(123456);
