<?php session_start();?>
<html>
<head>
    <title>HTML tags counter</title>
</head>
<body>
<p>Enter HTML tags:</p>
<form>
    <input type="text" name="tag">
    <input type="submit">
</form>

<?php
if (!isset($_SESSION['score'])) {
    $_SESSION['score']=0;
}
if (!isset($_SESSION['allTags'])) {
    $_SESSION['allTags']=array('a','br','h1','h2','h3','div','span','article','br','img','ul','li','table','td','tr','th');
}
$score=0;
if (isset($_GET['tag'])){
    $debug = array_search($_GET['tag'],$_SESSION['allTags']);
    if (is_int(array_search($_GET['tag'],$_SESSION['allTags']))) {
        $_SESSION['score']++;
        $key = array_search($_GET['tag'], $_SESSION['allTags']);
        unset($_SESSION['allTags'][$key]);
        echo 'Valid HTML Tag!';
        ?>
        <div class="score">
            <?php echo 'Score: '.$_SESSION['score'];?>
        </div>
        <?php
    } else {
        echo 'Invalid HTML Tag!(or already entered)';
?>
<div class="score">
<?php echo 'Score: '.$_SESSION['score'];?>
</div>
<?php
    }
}  ?>

</body>
</html>
