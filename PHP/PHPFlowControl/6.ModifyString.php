<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>
    <style>
        table,td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form>
    <input type="text" name="input">
    <input type="radio" name="modify" value="palindrome">
    <label>Check Palindrome</label>
    <input type="radio" name="modify" value="reverse">
    <label>Reverse String</label>
    <input type="radio" name="modify" value="split">
    <label>Split</label>
    <input type="radio" name="modify" value="hash">
    <label>Hash String</label>
    <input type="radio" name="modify" value="shuffle">
    <label>Shuffle String</label>
    <input type="submit" name="Submit">
</form>
<?php
function palindrome($str) {
    $arr=str_split($str);
    $reversed = array_reverse($arr);
    $palindrome=true;
    for ($i=0;$i<count($arr);$i++) {
        if ($arr[$i]!=$reversed[$i]) {
            $palindrome=false;
            break;
        }
    }
    if($palindrome) {
        echo $str.' is palindrome!';
    } else {
        echo $str.' is not a palindrome!';
    }
}
if ( isset($_GET['input'])&&isset($_GET['modify']) ):?>
<div>
    <?php
    switch($_GET['modify']) {
        case 'palindrome': palindrome($_GET['input']); break;
        case 'reverse': echo strrev($_GET['input']); break;
        case 'split':echo join(' ',str_split($_GET['input'])); break;
        case 'hash': echo crypt($_GET['input']); break;
        case 'shuffle': echo str_shuffle($_GET['input']); break;
    }
    ?>
</div>
<?php endif; ?>
</body>
</html>