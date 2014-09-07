<?php
$amount = 0;
$currency = "";
$interestAmount = 0;
$duration = 0;
$sum = 0;
$interest = 0;
$result = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["amount"])) {
        $amount = $_POST["amount"];
    }
    if (isset($_POST["currency"])) {
        $currency = $_POST["currency"];
    }
    if (isset($_POST["interestAmount"])) {

        $interestAmount = $_POST["interestAmount"] / 12;
    }
    if (isset($_POST["years"])) {
        $duration = $_POST["years"];
    }

    for ($i = 0; $i < $duration; $i++) {
        $interest = $amount * ((100 + $interestAmount) / 100) - $amount;
        $sum = $amount + $interest;
        $amount = $sum;
    }
    $sum=round($sum,2);
    if ($currency == 'eur') {
        $result = '&euro;' . $sum;
    } else if ($currency == 'usd') {
        $result = '$' . $sum;
    } else if ($currency == 'bgn') {
        $result = $sum . " лева";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Most Frequent Tag</title>

</head>
<body>
<form method="post" action="">
    <label for="amount">Enter Amount</label>
    <input type="text" id="amount" name="amount"/><br/>
    <input type="radio" name="currency" value="usd" id="usd">
    <label for="usd">USD</label>
    <input type="radio" name="currency" value="eur" id="eur">
    <label for="eur">EUR</label>
    <input type="radio" name="currency" value="bgn" id="bgn">
    <label for="bgn">BGN</label><br/>
    <label for="interestAmount">Compound Interest Amount</label>
    <input type="text" id="interestAmount" name="interestAmount"/><br/>
    <select name="years">
        <option value="6">6 Months</option>
        <option value="12">1 Year</option>
        <option value="24">2 Years</option>
        <option value="60">5 Years</option>
    </select>
    <input type="submit" value="Calculate"/>
    <?php echo $result ?>

</form>
</body>
</html>