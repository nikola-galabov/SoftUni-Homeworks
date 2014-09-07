function calcSupply(age, maxage, consumation, favFood) {
    var supply = (Number(maxage) - Number(age)) * 365 * consumation;
    console.log(supply + 'kg' + ' of ' + favFood + ' would be enough until I am ' + maxage + ' years old.');
}

calcSupply(38, 118, 0.5, 'chocolate');
calcSupply(20, 87, 2, 'fruits');
calcSupply(16, 102, 1.1, 'nuts');