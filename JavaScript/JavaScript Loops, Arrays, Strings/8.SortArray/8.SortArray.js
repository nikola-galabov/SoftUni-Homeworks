function sortArray(value) {
    var arr = value;
 
    for (currentIndex = 0; currentIndex < arr.length - 1; currentIndex+=1) {
        var minIndex = currentIndex;
        for (i = currentIndex + 1; i < arr.length; i++) {
            if (arr[i] < arr[minIndex]) {
                minIndex = i;
            }
        }
        if (minIndex != currentIndex) {
            var temp = arr[currentIndex];
            arr[currentIndex] = arr[minIndex];
            arr[minIndex] = temp;
        }
    }
    console.log(arr);
}

sortArray([5, 4, 3, 2, 1]);