<!DOCTYPE html>
<html>
<head>
    <title>Sentence Extractor</title>
</head>
<body>
<form>
    <label>Enter text:</label>
    <textarea name="input"></textarea>
    <label>Enter word:</label>
    <input type="text" name="word">
    <input type="submit" value="Extract">
</form>

<?php
if ( isset($_GET['input'])&&isset($_GET['word']) ) {

    $remove = preg_replace('/.+[.!?]/','',$_GET['input']);
    var_dump($remove);
    $_GET['input'] = str_replace($remove,'',$_GET['input']);
    $sentences = preg_split('/(?<=[.?!;])\s+(?=\p{Lu})/',$_GET['input'],-1,PREG_SPLIT_NO_EMPTY);
    var_dump($sentences);

    foreach ($sentences as $sentence) {
        $words = preg_split('/\W+/',$sentence,-1,PREG_SPLIT_NO_EMPTY);
        var_dump($words);
        foreach ($words as $word) {
            if ($word==$_GET['word']) {
                echo $sentence.'<br/>';
                break;
            }
        }
    }
}
?>

</body>
</html>