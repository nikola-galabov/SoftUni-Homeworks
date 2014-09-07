function replaceSpaces(value) {
    var str = value;
    var regex = new RegExp(" ", 'g');
    str = str.replace(regex, '');
    console.log(str);
}

replaceSpaces('But you were living in another world tryin\' to get your message through');