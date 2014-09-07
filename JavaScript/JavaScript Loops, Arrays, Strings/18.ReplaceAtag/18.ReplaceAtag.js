function replaceATag(value) {
    var result = value;
    while (result.indexOf('<a') != -1) {
        var start = result.indexOf('<a');
        var end = result.indexOf('>', start)+1;
        var replace = result.substring(start, end);
        var newValue = replace.replace('<a', '[URL').replace('>', ']');
        result = result.replace(replace, newValue).replace('</a>','[/URL]');
        
    }
    console.log(result);
}

replaceATag('<ul>' +
'<li>' +
'<a href=http://softuni.bg>SoftUni</a>' +
'</li>' +
'</ul>');

replaceATag('<ul>' +
    '<a href=http://softuni.bg>SoftUni</a>'+
'<li>' +
'<a href=http://softuni.bg>SoftUni</a>' +
'</li>' +
'<a href=http://softuni.bg>SoftUni</a>' +
'</ul>');