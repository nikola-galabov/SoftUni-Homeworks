function triangleArea() {
    var r = Number(document.getElementById('radius').value);
    var area = r *r* Math.PI;
    var result = document.getElementById('result');
    result.innerHTML = area;
}