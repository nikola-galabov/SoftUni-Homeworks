﻿function soothsayer(value) {
    var years = value[0];
    var lenguages = value[1];
    var cities = value[2];
    var cars = value[3];
    var result = Array(4);

    
    result[0] = years[Math.floor(Math.random() * years.length)];
    result[1] = lenguages[Math.floor(Math.random() * lenguages.length)];
    result[2] = cities[Math.floor(Math.random() * cities.length)];
    result[3] = cars[Math.floor(Math.random() * cars.length)];

    console.log('You will work ' + result[0] + ' years on ' + result[1] +
        '. You will live in ' + result[2] + ' and drive ' + result[3] + '.');
}

soothsayer([[3, 5, 2, 7, 9], ['Java', 'Python', 'C#', 'JavaScript', 'Ruby'],
    ['Silicon Valley', 'London', 'Las Vegas', 'Paris', 'Sofia'], ['BMW', 'Audi', 'Lada', 'Skoda', 'Opel']])