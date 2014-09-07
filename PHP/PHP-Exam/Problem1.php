<!DOCTYPE html>
<html>
<head>
    <title>Drop It</title>
    <style>
        textarea {
            width: 300px;
            height: 200px;
        }
        select, textarea, input {
            display: block;
            margin: 5px;
        }
    </style>
</head>

<body>
<form action="" method="get">
    <label>Text:</label>
    <textarea name="text">Hi PHP5</textarea>
    <label>Minimum font size:</label>
    <input type="text" name="minFontSize" value="4"/>
    <label>Maximum font size:</label>
    <input type="text" name="maxFontSize" value="8"/>
    <label>Step:</label>
    <input type="text" name="step" value="3"/>
    <input type="submit" value="Submit" />
</form>
</body>

</html>

<?php
$input = $_GET['text'];
$minFontSize = $_GET['minFontSize'];
$maxFontSize = $_GET['maxFontSize'];
$step = $_GET['step'];

$fontSize = $minFontSize;
$result='';
$increasing=true;
for ($i=0; $i<strlen($input); $i++) {

    if (ord($input[$i])%2==0) {
        $stroke = 'text-decoration:line-through;';
    } else {
        $stroke = '';
    }
    $result .= "<span style='font-size:".$fontSize.';'.$stroke."'>".htmlspecialchars($input[$i])."</span>";
    if ($fontSize<=$maxFontSize&&$increasing) {
        if (ctype_alpha($input[$i])) {
            $fontSize+=$step;
        }
    }
    if($fontSize>=$minFontSize&&!$increasing) {
        if (ctype_alpha($input[$i])) {
            $fontSize-=$step;
        }
    }
    if ($increasing&&$fontSize>=$maxFontSize) {
        $increasing=false;
    }
    if (!$increasing&&$fontSize<=$minFontSize) {
        $increasing=true;
    }
}

echo $result;
?>