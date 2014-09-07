<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Tags Counter</title>
</head>
<body>

<form method="post">
    <p>Enter HTML tags:</p>
    <input type="text" name="tag">
    <input type="submit">
</form>

<?php
session_start();
$result="";
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
if(!isset($_SESSION['tags'])){
    $_SESSION['tags']=['a','h1','h2','h3'];
}
if(isset($_POST["tag"])){
    $tag=$_POST["tag"];
    if(in_array($tag,$_SESSION['tags'])){
        $result="Valid HTML tag!";
        $_SESSION['tags'] = array_diff($_SESSION['tags'], array($tag));
        $_SESSION['count']++;
    }else
    {$result="Invalid HTML tag!";}
}
?>

<h1><?php echo $result; ?></h1>
<h1>Score: <?php echo $_SESSION['count']; ?></h1>

</body>
</html>