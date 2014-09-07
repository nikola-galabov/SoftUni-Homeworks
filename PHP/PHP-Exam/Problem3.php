<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        label, textarea {
            display: block;
        }
        textarea {
            width: 500px;
            height: 150px;
        }
    </style>
</head>
<body>
<form action="" method="get">
    <label>Text:</label>
    <textarea name="text">The dangers of smoking%Dr. Elliot Hawking;13-06-2014-Recent research has proven that about 80% of all smokers, who smoke on a regular daily basis, are developing.</textarea>
    <input type="submit" value="SUBMIT"/>
</form>

<br>
<br>
<br>

<form action="" method="get">
    <label>Text:</label>
    <textarea name="text">The dangers of smoking%Dr. Elliot Hawking;13-06-2014-Recent research has proven that about 80% of all smokers, who smoke on a regular daily basis, are developing...
        Writing a quality CV%  Dr. Svetlin Nakov      ;18-12-2014-  Curriculum half-day free seminar to search and apply for a job(CV + cover letter) as a software engineer or IT specialist includes the most important issues involving the search for jobs, prepare application documents , application, preparation for interview and sitting for a job interview</textarea>
    <input type="submit" value="SUBMIT"/>
</form>

<br>
<br>
<br>

<form action="" method="get">
    <label>Text:</label>
    <textarea name="text">Network Security and why it is important%Dennis Ritchie;26-03-1998-No information yet
        Article#2</textarea>
    <input type="submit" value="SUBMIT"/>
</form>


</body>
</html>

<?php
date_default_timezone_set('Europe/Sofia');
$input = $_GET['text'];
preg_match_all('/([A-Za-z -]+)%([A-Za-z .-]+);[\s]*(\d\d-\d\d\-\d\d\d\d)[\s]*-(.+)\n*/',$input,$data);

$results=array();
for ($i=0; $i<count($data[1]);$i++) {
    $topic = htmlspecialchars(trim($data[1][$i]));
    $author = htmlspecialchars(trim($data[2][$i]));
    $month= new DateTime(trim($data[3][$i]));
    $month=htmlspecialchars($month->format('F'));
    $summary = htmlspecialchars(substr(trim($data[4][$i]),0,100));
    $threeDots='...';
    if ($summary[strlen($summary)-1]=='.'&&$summary[strlen($summary)-2]=='.'&&$summary[strlen($summary)-3]=='.') {
        $threeDots='';
    }
    elseif ($summary[strlen($summary)-1]=='.'&&$summary[strlen($summary)-2]=='.') {
        $threeDots='.';
    }
    elseif ($summary[strlen($summary)-1]=='.') {
        $threeDots='..';
    }
    $results[]="<b>Topic:</b> <span>{$topic}</span>\n<b>Author:</b> <span>{$author}</span>\n<b>When:</b> <span>{$month}</span>\n<b>Summary:</b> <span>{$summary}{$threeDots}</span>";
}

foreach ($results as $result) {
    echo "<div>\n";
    echo $result."\n";
    echo "</div>\n";

}
?>

