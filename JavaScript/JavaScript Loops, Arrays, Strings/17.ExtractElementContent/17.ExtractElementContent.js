function extractContent(value) {
    var result = value;


    while (result.indexOf('<')!=-1) {
        var start = result.indexOf('<');
        var end = result.indexOf('>')+1;
        var replace = result.substring(start, end);
        result = result.replace(replace, '');
  
    }

    console.log(result);
}

extractContent('<p>Hello</p><a href="http://w3c.org">W3C</a>');
extractContent('<ul>'+
'<li>'+
'<a href=http://softuni.bg>SoftUni</a>' +
'</li>' +
'</ul>'
);