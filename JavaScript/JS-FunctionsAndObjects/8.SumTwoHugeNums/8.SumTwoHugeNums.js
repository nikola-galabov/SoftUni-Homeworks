var bigInt = require("big-integer");

function sumTwoHugeNumbers(value) {
    var result = bigInt(value[0]).add(value[1]);
    console.log(result.toString());
}

sumTwoHugeNumbers(['155', '65']);
sumTwoHugeNumbers(['123456789', '123456789']);
sumTwoHugeNumbers(['887987345974539', '4582796427862587']);
sumTwoHugeNumbers(['347135713985789531798031509832579382573195807',
 '817651358763158761358796358971685973163314321']);
