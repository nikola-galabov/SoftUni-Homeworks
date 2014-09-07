<!DOCTYPE html>
<html>
<head>
    <title>Chat Logger</title>
    <style>
        textarea {
            width: 400px;
            height: 100px;
        }
        select, textarea, input {
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>

<form action="" method="get">
    <label>Current Date:</label>
    <input type="text" name="currentDate" value="12-08-2014 10:14:23"/>
    <label>Messages:</label>
    <textarea name="messages">Thanks :) / 11-08-2014 22:54:52
        Hey John, happy birthday! / 10-08-2014 00:00:00</textarea>
    <input type="submit" value="SUBMIT" />
</form>

<br/>
<br/>
<br/>

<form action="" method="get">
    <label>Current Date:</label>
    <input type="text" name="currentDate" value="29-08-2014 15:33:11"/>
    <label>Messages:</label>
    <textarea name="messages">Kaji na mama che q obicham / 29-08-2014 15:32:23
        Zdravey, kak mina izpita? / 29-08-2014 15:30:32
        Brat sgashtiha me da prepisvam i me karat v raionnoto.. / 29-08-2014 15:30:58</textarea>
    <input type="submit" value="SUBMIT" />
</form>

<br/>
<br/>
<br/>

<form action="" method="get">
    <label>Current Date:</label>
    <input type="text" name="currentDate" value="29-08-2014 17:33:11"/>
    <label>Messages:</label>
    <textarea name="messages">Wanna grab some snacks? / 24-08-2014 16:33:12
        Sure, be right there in a minute! / 25-08-2014 22:06:13</textarea>
    <input type="submit" value="SUBMIT" />
</form>

</body>
</html>

<?php
date_default_timezone_set('Europe/Sofia');
$date = $_GET['currentDate'];
$input=$_GET['messages'];
//var_dump($date);
//var_dump($input);
$messages = explode("\n",$input);
$datesMessages=array();
foreach ($messages as $message) {
    $temp=explode(' / ',$message);
    $temp[0]=trim($temp[0]);
    $temp[1]=trim($temp[1]);
    $dateAndTime = explode(' ',$temp[1]);
    $onlyDate = explode('-',$dateAndTime[0]);
    $key = $onlyDate[2].'-'.$onlyDate[1].'-'.$onlyDate[0].' '.$dateAndTime[1];
    if (array_key_exists($key,$datesMessages)) {
        $datesMessages[$key][]=$temp[0];
    } else {
        $datesMessages[$key]=$temp[0];
    }
}

ksort($datesMessages);
//var_dump($datesMessages);
end($datesMessages);
$mostRecent=key($datesMessages);

$dateWithoutTime=new DateTime(explode(' ',$date)[0]);
$mostRecentWithoutTime=new DateTime(explode(' ',$mostRecent)[0]);

$date=new DateTime($date);
$mostRecent=new DateTime($mostRecent);

$diffWithoutTime= $dateWithoutTime->diff($mostRecentWithoutTime);
$diff=$date->diff($mostRecent);

$lastActivity;
if ($diffWithoutTime->days>1) {
    $lastActivity = $mostRecent->format('d-m-Y');
} elseif ($diffWithoutTime->days==1) {
    $lastActivity='yesterday';
} elseif ($diffWithoutTime->days==0) {
    if ($diff->h>=1) {
        $lastActivity="{$diff->h} hour(s) ago";
    } elseif ($diff->i>=1) {
        $lastActivity="{$diff->i} minute(s) ago";
    } elseif ($diff->i<1) {
        $lastActivity='a few moments ago';
    }
}

foreach ($datesMessages as $message) {
    $message=htmlspecialchars($message);
    echo "<div>$message</div>\n";
}
echo "<p>Last active: <time>{$lastActivity}</time></p>";

?>