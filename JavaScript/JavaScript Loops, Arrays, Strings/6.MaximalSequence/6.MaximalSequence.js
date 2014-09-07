function findMaxSequence(value) {
    var arr = value;
    var maxLenght = 1;
    var currentLenght = 1;
    var currentArr = [arr[0]];
    var result = [arr[0]];

    for (var i = 1; i < arr.length; i+=1) {
        if (arr[i]===arr[i-1]) {
            currentLenght++;
            currentArr.push(arr[i]);
        } else {
            currentLenght = 1;
            currentArr = [arr[i]];
        }
        if (currentLenght >= maxLenght) {
            result = currentArr;
            maxLenght = currentLenght;
        }
    }
    console.log(result);
}

findMaxSequence([2, 1, 1, 2, 3, 3, 2, 2, 2, 1]);
findMaxSequence(['happy']);
findMaxSequence([2, 'qwe', 'qwe', 3, 3, '3']);