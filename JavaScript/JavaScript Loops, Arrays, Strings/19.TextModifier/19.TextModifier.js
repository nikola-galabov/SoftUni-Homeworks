function fixCasing(value) {
    var result = value;
    
    while (result.indexOf('<mixcase>') != -1) {
        var word = result.substring(result.indexOf('<mixcase>'), result.indexOf('</mixcase>') + 10);
        result = result.replace(word, mixCase(word));
    }
    
    while (result.indexOf('<upcase>') != -1) {
        var word = result.substring(result.indexOf('<upcase>'), result.indexOf('</upcase>') + 9);
        result = result.replace(word, upperCase(word));
    }
    
    while (result.indexOf('<lowcase>') != -1) {
        var word = result.substring(result.indexOf('<lowcase>'), result.indexOf('</lowcase>') + 10);
        result = result.replace(word, lowerCase(word));
    }
    
    function mixCase(word) {
        word = word.replace('<mixcase>', '').replace('</mixcase>', '');
        var mixWord = '';
        for (var j = 0; j < word.length; j++) {
            var random = Math.floor(Math.random() * 10);
            
            if (random > 5) {
                mixWord += word[j].toUpperCase();
            } else {
                mixWord += word[j].toLowerCase();
            }
        }
        return mixWord;
    }
    
    function upperCase(word) {
        word = word.replace('<upcase>', '').replace('</upcase>', '');
        var upperWord = '';
        for (var j = 0; j < word.length; j++) {
            upperWord += word[j].toUpperCase();   
        }
        return upperWord;
    }
    
    function lowerCase(word) {
        word = word.replace('<lowcase>', '').replace('</lowcase>', '');
        var lowerWord = '';
        for (var j = 0; j < word.length; j++) {
            lowerWord += word[j].toLowerCase();
        }
        return lowerWord;
    }
    
    console.log(result);

}

fixCasing('We are <mixcase>living</mixcase> in a <upcase>yellow submarine</upcase>. We <mixcase>don\'t</mixcase> have <lowcase>anything</lowcase> else.');