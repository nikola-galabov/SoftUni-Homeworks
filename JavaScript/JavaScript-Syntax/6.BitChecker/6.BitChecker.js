function bitChecker(value) {
    var binary = Number(value).toString(2);
    if (Number(value).toString(2).length >= 4) {
        var mask = 1 << 3;
        console.log((mask & binary) >> 3 == 1);
    } else {
        console.log('false');
    }
}

bitChecker(333);
bitChecker(425);
bitChecker(2567564754);