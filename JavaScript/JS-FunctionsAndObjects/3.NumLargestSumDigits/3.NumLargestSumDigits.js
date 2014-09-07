function findLargestBySumOfDigits(nums) {
    var result = 0;
    var maxSum = 0;

    for (var i = 0; i < arguments.length; i++) {
        var str = arguments[i].toString();
        var currentSum = 0;
        
        for (var j = 0; j < str.length; j++) {
            if (str[j] != '0' && str[j] != '1' && str[j] != '2' && str[j] != '3' && str[j] != '4' && str[j] != '5' &&
                str[j] != '6' && str[j] != '7' && str[j] != '8' && str[j] != '9' && str[j] != '-') {
                console.log('undefined');
                return;
            }
            if (str[j] == '-') {
                currentSum += 0;
            } else {
                currentSum += Number(str[j]);
            }
        }
        if (currentSum > maxSum) {
            maxSum = currentSum;
            result = Number(str);
        }
    }
    
    console.log(result);
}

findLargestBySumOfDigits(5, 10, 15, 111);
findLargestBySumOfDigits(33, 44, -99, 0, 20);
findLargestBySumOfDigits('hello');
findLargestBySumOfDigits(5, 3.3);