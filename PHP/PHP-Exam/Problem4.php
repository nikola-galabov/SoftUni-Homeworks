<!DOCTYPE html>
<html>
<head>
    <title>SoftUni Tunes</title>
    <style>
        textarea {
            width: 500px;
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
    <textarea name="text">Krali Marko | Rock | Nakov, Joro, Pesho | 1250 | 4.8
        Sladkarnica Malinka | Jazz | Pencho, Nakov, Gero | 728 | 4.3
        Hvani me Minke | Rock | Kaloqn, Tosho | 1930 | 4.4
        V starite Karpati | Rock | Nakov | 1029 | 4.1
        Rakiichice | Rock | Ceco, Joro, Nakov, Preslav, Petya | 453 | 4.2</textarea>
    <label>Artist:</label>
    <input type="text" name="artist" value="Nakov"/>
    <label>Sort by:</label>
    <select name="property">
        <option value="name">name</option>
        <option value="genre">genre</option>
        <option value="downloads">downloads</option>
        <option value="rating" selected>rating</option>
    </select>
    <label>Order by:</label>
    <select name="order">
        <option value="ascending" selected>ascending</option>
        <option value="descending">descending</option>
    </select>
    <input type="submit" value="SUBMIT"/>
</form>
</body>
</html>

<?php

$input = $_GET['text'];
$input=explode("\n",$input);
$order = $_GET['order'];

$artist = $_GET['artist'];
$prop = $_GET['property'];


var_dump($input);
//var_dump($order);
//var_dump($artist);
//var_dump($prop);

$songs=array();

foreach ($input as $row) {
    $temp = explode('|',$row);
    $song = ['name'=>trim($temp[0]),'genre'=>trim($temp[1]),'artists'=>explode(',',trim($temp[2])),'downloads'=>trim($temp[3]),'rating'=>trim($temp[4])];
    foreach ($song['artists'] as &$art) {
        $art=trim($art);
    }

    sort($song['artists']);
    if (in_array($artist,$song['artists'])) {
        $song['artists']= implode(', ',$song['artists']);
        $songs[$song[$prop]][$song['name']]=$song;

    }
}


if ($order=='ascending') {
    ksort($songs);

    foreach ($songs as &$song) {
        ksort($song);
    }
} else {
    krsort($songs);

    foreach ($songs as &$song) {
        ksort($song);
    }
}
echo "<table>\n<tr><th>Name</th><th>Genre</th><th>Artists</th><th>Downloads</th><th>Rating</th></tr>\n";
foreach ($songs as $key => $val) {
    foreach($songs[$key] as $el){
        echo "<tr>";
        foreach ($el as $prop) {
            echo "<td>".htmlspecialchars($prop)."</td>";
        }
        echo "</tr>\n";

    }
}
echo '</table>';

?>
<table>
    <tr><th>Name</th><th>Genre</th><th>Artists</th><th>Downloads</th><th>Rating</th></tr>
    <tr><td>song100</td><td>Classical</td><td>Nakov</td><td>0</td><td>0</td></tr>
    <tr><td>song2</td><td>Jazz</td><td>Joro, Nakov, Pencho</td><td>7728</td><td>1.3</td></tr>
    <tr><td>song55</td><td>Jazz</td><td>Joro, Nakov, Pencho</td><td>7268</td><td>1.3</td></tr>
    <tr><td>songzz</td><td>Jazz</td><td>Joro, Nakov, Pencho</td><td>7128</td><td>1.3</td></tr>
    <tr><td>song11</td><td>Pop</td><td>Joro, Koro, Nakov, Penio, Pesho, Pudio, asd</td><td>1250</td><td>4.8</td></tr>
    <tr><td>song12</td><td>Pop</td><td>Joro, Koro, Nakov, Penio, Pesho, Pudio, asd</td><td>12250</td><td>3.8</td></tr>
    <tr><td>song5</td><td>Pop</td><td>Joro, Koro, Nakov, Penio, Pesho, Pudio, asd</td><td>12850</td><td>1.8</td></tr>
</table>