function Person(firstname, lastname, age) {
    var person;
    this.firstname = firstname;
    this.lastname = lastname;
    this.age = age;
    return person;
}

function group(arr, key) {
    switch (key) {
        case ('firstname'): groupByFname(arr); break;
        case ('lastName'): groupByLname(arr); break;
        case ('age'): groupByAge(arr); break;
    }
}

function groupByFname(arr) {
    var result = {};
    for (var i = 0; i < arr.length; i++) {
        var element = ' '+arr[i].firstname + ' ' + arr[i].lastname + '(age ' + arr[i].age + ')';
        if (result.hasOwnProperty(arr[i].firstname)) {
            result[arr[i].firstname].push(element);
        } else {
            result[arr[i].firstname] = [element];
        }
        
    }
    for (var prop in result) {
        console.log('Group '+prop+' :'+result[prop]);
    }
}

function groupByLname(arr) {
    var result = {};
    for (var i = 0; i < arr.length; i++) {
        var element = ' ' + arr[i].firstname + ' ' + arr[i].lastname + '(age ' + arr[i].age + ')';
        if (result.hasOwnProperty(arr[i].lastname)) {
            result[arr[i].lastname].push(element);
        } else {
            result[arr[i].lastname] = [element];
        }

    }
    for (var prop in result) {
        console.log('Group ' + prop + ' :' + result[prop]);
    }
}

function groupByAge(arr) {
    var result = {};
    for (var i = 0; i < arr.length; i++) {
        var element = ' ' + arr[i].firstname + ' ' + arr[i].lastname + '(age ' + arr[i].age + ')';
        if (result.hasOwnProperty(arr[i].age)) {
            result[arr[i].age].push(element);
        } else {
            result[arr[i].age] = [element];
        }

    }
    for (var prop in result) {
        console.log('Group ' + prop + ' :' + result[prop]);
    }
}

var persons = [];
persons.push(new Person("Scott", "Guthrie", 38));
persons.push(new Person("Scott", "Johns", 36));
persons.push(new Person("Scott", "Hanselman", 39));
persons.push(new Person("Jesse", "Liberty", 57));
persons.push(new Person("Jon", "Skeet", 38));

group(persons, 'firstname');
group(persons, 'age');
group(persons, 'lastName');