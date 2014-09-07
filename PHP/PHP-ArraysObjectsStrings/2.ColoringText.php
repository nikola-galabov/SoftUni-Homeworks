<!DOCTYPE html>
<html>
<head>
    <title>Coloring text</title>
    <style type="text/css">
        .even {
            color: red;
        }
        .odd {
            color: blue;
        }
    </style>
</head>
<body>
<form>
    <textarea name="input"></textarea>
    <input type="submit" value="Color text">
</form>

<?php
if ( isset($_GET['input']) ) {

    $chars = str_split($_GET['input']);

    foreach ($chars as $char) {

        if ( ord($char)%2==0 ) {
            $char='<span class="even">'.$char.'</span> ';
        } else {
            $char='<span class="odd">'.$char.'</span> ';
        }

        echo $char;
    }
}
?>

</body>
</html>