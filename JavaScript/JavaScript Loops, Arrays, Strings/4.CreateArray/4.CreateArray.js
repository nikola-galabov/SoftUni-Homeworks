function createArray() {
    var arr = Array(20);
    for (var i = 0; i < arr.length; i+=1) {
        arr[i] = i * 5;
    }
    console.log(arr);
}

createArray();