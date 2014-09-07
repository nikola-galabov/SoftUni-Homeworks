function findMaxSequence(value) {
    var arr = value;
    var currentSequence = [arr[0]];
    var result=[];
    for (var i = 1; i < arr.length; i++) {
        if (arr[i]>arr[i-1]) {
            currentSequence.push(arr[i]);
        } else {
            if (result.length<=currentSequence.length) {
                result = currentSequence;
            }
            currentSequence = [arr[i]];
        }
        if (result.length <= currentSequence.length) {
            result = currentSequence;
        }
    }
    if (result.length>1) {
        console.log(result);
    } else {
        console.log('no');
    }
}

findMaxSequence([3, 2, 3, 4, 2, 2, 4]);
findMaxSequence([3, 5, 4, 6, 1, 2, 3, 6, 10, 32]);
findMaxSequence([3, 2, 1]);