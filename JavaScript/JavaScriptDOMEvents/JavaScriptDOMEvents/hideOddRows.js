var hidden = false;
document.getElementById('btnHideOddRows').onclick = function () {
    var trows = document.getElementsByTagName('tr');
    if (hidden) {
        hidden = false;
        document.getElementById('btnHideOddRows').innerHTML = 'Hide Odd Rows';
        for (var i = 0; i < trows.length; i++) {
            if (i % 2 == 0) {
                trows[i].style.display = 'table-row';
            }
        }
    } else {
        hidden = true;
        document.getElementById('btnHideOddRows').innerHTML = 'Unhide Odd Rows';
        for (var i = 0; i < trows.length; i++) {
            if (i % 2 == 0) {
                trows[i].style.display = 'none';
            }
        }
    }

}