function findNthDigit(arr) {
    var num = String(arr[1]);
    regex = new RegExp('\\D', 'g');
    num = num.replace(regex, '');
    var result = num[num.length - arr[0]];
    if (result == undefined) {
        console.log('The number doesn\'t have ' + arr[0] + ' digits');
    } else {
        console.log(result);
    }
}

findNthDigit([1, 6]);
findNthDigit([2, -55]);
findNthDigit([6, 923456]);
findNthDigit([3, 1451.78]);
findNthDigit([6, 888.88]);