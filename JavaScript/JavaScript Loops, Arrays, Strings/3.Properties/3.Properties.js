function displayProperties(value) {
    var properties = [];
    for (var prop in document) {
        properties.push(prop.toLocaleLowerCase());
    }

    properties.sort();
    for (var i = 0; i < properties.length; i+=1) {
        console.log(properties[i]);
    }
    
}

displayProperties();