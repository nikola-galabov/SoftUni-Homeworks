<html>
<head>
    <title>Most frequent tag</title>
</head>
<body>
<p>Enter Tags:</p>
<form>
    <input type="text" name="tags">
    <input type="submit">
</form>

<?php
if (isset($_GET['tags'])):
    $tags= explode(', ',$_GET['tags']);
    $frequence=array();
    foreach ($tags as $key=>$value){
        if (!array_key_exists($value,$frequence)) {
            $frequence[$value]=1;
        } else {
            $frequence[$value]++;
        }
    }
    arsort($frequence);
    $max=0;
    static $mostFreq='';
    foreach ($frequence as $key=>$value):
        if ($max<$value) {
            $max=$value;
            $mostFreq=$key;
        }
?>
        <p> <?=$key?> : <?=$value?> </p>

    <?php endforeach;?>
<p>The most frequent tag is: <?=$mostFreq?></p>
<?php endif; ?>

</body>
</html>