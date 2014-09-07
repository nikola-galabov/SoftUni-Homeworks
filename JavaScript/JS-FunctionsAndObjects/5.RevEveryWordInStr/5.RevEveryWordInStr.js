function reverseWordsInString(str) {
    var words = str.split(' ');
    var result = '';

    for (var i in words) {
        for (j = words[i].length-1; j >= 0; j--) {
            result += words[i][j];
        }
        result += ' ';
    }

    console.log(result);
}

reverseWordsInString('Hello, how are you.');
reverseWordsInString('Life is pretty good, isnt it?');