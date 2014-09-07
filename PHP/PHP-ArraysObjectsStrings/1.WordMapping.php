<!DOCTYPE html>
<html>
<head>
    <title>Word Mapping</title>
    <style type="text/css">
        table,td {
            border: 1px solid black;
            color: black;
            background-color: darkgray;
        }
    </style>
</head>
<body>
<form>
    <textarea name="input"></textarea> <br/>
    <input type="submit" value="Count words">
</form>

<?php
if ( isset($_GET['input']) ):

    $words = preg_split('/\W+/',strtolower($_GET['input']),-1, PREG_SPLIT_NO_EMPTY);
    $map = array();

    foreach ($words as $word) {

        if( !array_key_exists($word,$map) ) {
            $map[$word]=1;
        } else {
            $map[$word]++;
        }
    }

    if ( count($map)==0 ) {
        echo 'Please enter some text';
    } else {
?>
<table>
        <?php
        foreach ( $map as $key => $value ):
        ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
        <?php   endforeach; ?>
</table>
<?php
    }
endif;
?>

</body>
</html>