function findMostFreqWord(value) {
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
    var obj = {};
    var max = 1;

    for (var i = 0; i < value.length; i++) {
        if(obj.hasOwnProperty(value[i].toLowerCase())) {
            obj[value[i].toLowerCase()] += 1;
            if (obj[value[i].toLowerCase()]>max) {
                max=obj[value[i].toLowerCase()];
            }
        } else {
            obj[value[i].toLowerCase()] = 1;
        }
    }

    for (var prop in obj) {
        if (obj[prop] == max) {
            console.log(prop + '->' + obj[prop]);
        }
    }
}

findMostFreqWord('in the middle of the night');
findMostFreqWord('Welcome to SoftUni. Welcome to Java. Welcome everyone.');
findMostFreqWord('Hello my friend, hello my darling. Come on, come here. Welcome, welcome darling.');