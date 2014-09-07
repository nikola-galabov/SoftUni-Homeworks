﻿function clone(obj) {
    var result = JSON.parse(JSON.stringify(obj));
    return result;
}

function compareObjects(obj, objCopy) {
    console.log('a == b --> '+ (obj==objCopy));
}

var a = { name: 'Pesho', age: 21 }
var b = clone(a); // a deep copy 
compareObjects(a, b);

var a = { name: 'Pesho', age: 21 };
var b = a; // not a deep copy
compareObjects(a, b);
