function reverseString(value) {
    var str = value;
    var reversed = '';

    for (var i = str.length-1; i >=0; i--) {
        reversed += str[i];
    }

    console.log(reversed);
}

reverseString('sample');
reverseString('softUni');
reverseString('java script');