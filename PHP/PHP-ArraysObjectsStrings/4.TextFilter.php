<!DOCTYPE html>
<html>
<head>
    <title>Text filter</title>
</head>
<body>
<form>
    <label>Enter text:</label>
    <textarea name="input"></textarea> <br/>
    <label>banlist:</label>
    <input type="text" name="banlist">
    <input type="submit" value="Filter">
</form>

<?php

function new_string($char,$count){
    $result='';
    for ($i=0;$i<$count;$i++) {
        $result.=$char;
    }
    return $result;
}

if ( isset($_GET['input'])&&isset($_GET['banlist']) ) {

    $banlist = explode(', ',$_GET['banlist']);
    $result = $_GET['input'];

    foreach ($banlist as $ban) {
        $replace=new_string('*',strlen($ban));

        $result = str_ireplace($ban,$replace,$result);
    }

    echo $result;
}
?>

</body>
</html>