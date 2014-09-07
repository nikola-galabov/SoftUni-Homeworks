function variablesTypes(value) {
    var name = value[0];
    var age = value[1];
    var isMale = value[2];
    var food = value[3];
    console.log('"My name: ' + name + ' //type is ' + typeof (name));
    console.log('My age: ' + age + ' //type is ' + typeof (age));
    console.log('I am male: ' + isMale + ' //type is ' + typeof (isMale));
    console.log('My favorite foods are: ' + food + ' //type is ' + typeof (food)+'"');
}

variablesTypes(['Pesho', 22, true, ['fries', 'banana', 'cake']]);