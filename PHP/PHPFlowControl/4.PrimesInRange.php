<!DOCTYPE html>
<html>
<head>
    <title>Find Primes in Range</title>

</head>
<body>
<form>
    <label>Start Index:</label>
    <input type="text" name="start">
    <label>End:</label>
    <input type="text" name="end">
    <input type="submit" value="Submit">
    <?php
    if ( isset($_GET['start']) && isset($_GET['end']) ):
    ?>
        <div>
        <?php
        function isPrime($a) {
            $divider = 2;
            $maxDivider = intval(sqrt($a));
            $prime = true;
            while ($prime && ($divider <= $maxDivider)) {
                if ($a % $divider == 0) {
                    $prime = false;
                }
                $divider++;
            }
            return $prime;
        }

        for ($i=intval($_GET['start']);$i<=intval($_GET['end']);$i++) {
            if (isPrime($i)) {
                echo '<b>'.$i.'</b>';
            } else {
                echo $i;
            }
            if ($i+1<=intval($_GET['end'])) {
                echo ', ';
            }
        }
        ?>
    <?php endif; ?>

</form>
</body>
</html>