function compareChars(value, value2) {
    var arr = value;
    var arr2 = value2;
    if (arr.length != arr2.length) {
        console.log('Not Equal');
        return;
    }
    for (var i = 0; i < arr.length; i += 1) {
        if (arr[i] != arr2[i]) {
            console.log('Not Equal');
            return;
        }
    }
    console.log('Equal');
}

compareChars(['1', 'f', '1', 's', 'g', 'j', 'f', 'u', 's', 'q'],
['1', 'f', '1', 's', 'g', 'j', 'f', 'u', 's', 'q']
);
compareChars(['3', '5', 'g', 'd'],
['5', '3', 'g', 'd']
);
compareChars(['q', 'g', 'q', 'h', 'a', 'k', 'u', '8', '}', 'q', '.', 'h', '|', ';'],
['6', 'f', 'w', 'q', ':', '”', 'd', '}', ']', 's', 'r']
);