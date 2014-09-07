<html>
<head>
    <title>Print tags</title>
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
    foreach ($tags as $key=>$value): ?>
        <p> <?=$key?> : <?=$value?> </p>
    <?php endforeach;
           endif; ?>

</body>
</html>