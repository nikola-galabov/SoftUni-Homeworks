<!DOCTYPE html>
<html>
<head>
    <title>URL Replacer</title>
</head>
<body>
<form>
    <label>Enter text:</label>
    <textarea name="input"></textarea>
    <input type="submit" value="Replace">
</form>
<?php
if ( isset($_GET['input']) ) {
    $html = str_replace('</a>','[/URL]',$_GET['input']);
    $html = preg_replace('/<a href="(.*?)">/', '[URL=\1]',$html);
    echo htmlentities($html);
}
?>
</body>
</html>