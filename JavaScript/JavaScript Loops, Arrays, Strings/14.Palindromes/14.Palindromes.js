function findPalindromes(value) {
    Array.prototype.clean = function (deleteValue) {
        for (var i = 0; i < this.length; i++) {
            if (this[i] == deleteValue) {
                this.splice(i, 1);
                i--;
            }
        }
        return this;
    };

    var regex = new RegExp('\\W', 'g');
    value = value.split(regex).clean('');
    var answer = [];
    for (var i = 0; i < value.length; i++) {
        var temp = value[i].toLowerCase();
        var palindrom = true;

        for (var j = 0; j < temp.length / 2; j++) {
            if (temp[j] != temp[temp.length - j - 1]) {
                palindrom = false;
            }
        }
        if (palindrom) {
            answer.push(temp);
        }
    }
    console.log(answer.join(', '));
    
}

findPalindromes('There is a man, his name was Bob.');