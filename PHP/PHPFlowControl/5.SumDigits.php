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
    <label>Input string:</label>
    <input type="text" name="input">
    <input type="submit" value="Submit">
</form>
<?php
if ( isset($_GET['input']) ):
    $nums = explode(', ',$_GET['input']);
?>
    <table>
    <?php
    foreach ($nums as $num) {
        echo "<tr><td>$num</td>";
        $sumDigits=0;
        for ($i=0;$i<strlen($num);$i++) {
            if (intval($num[$i])==0) {
                if ($num[$i]==='0') {
                    $sumDigits+=intval($num[$i]);
                } else {
                    $sumDigits='I cannot sum that';
                    break;
                }
            } else {
                $sumDigits+=intval($num[$i]);
            }
        }
        echo "<td>$sumDigits</td></tr>";
    }
    ?>
    </table>
<?php endif; ?>
</body>
</html>