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
$arr = [
    "Gosho" => 3.55, "Mimi" => 6.00,
    "Pesho" => [3.00, 3.50, 3.40],
    "Zazi" => [5.00, 5.26]
];
uasort($arr, function ($a, $b) {
    $first = is_array($a) ? max($a) : $a;
    $second = is_array($b) ? max($b) : $b;
    return ($first - $second);
});
echo json_encode($arr);
?>

</body>
</html>