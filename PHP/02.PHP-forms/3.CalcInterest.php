<html>
<head>
    <title>Calculate interest</title>
</head>
<body>
<form>
    <label>Enter Amount</label>
    <input type="text" name="amount"> <br>
    <label>USD</label>
    <input type="radio" name="currency" value="USD">
    <label>EUR</label>
    <input type="radio" name="currency" value="EUR">
    <label>BGN</label>
    <input type="radio" name="currency" value="BGN"> <br>
    <label>Compound Interest amount</label>
    <input type="text" name="interest"><br>
    <select name="period">
        <option value="0.5">6 Months</option>
        <option value="1">1 Year</option>
        <option value="2">2 Years</option>
        <option value="5">5 Years</option>
    </select>
    <input type="submit" value="Calculate">
</form>
<?php
if (isset($_GET['amount'])&&$_GET['interest']!=''&&isset($_GET['period'])&&isset($_GET['currency'])) {
    $period= floatval($_GET['period'])*12;
    $amount=intval($_GET['amount']);
    $interest=(floatval($_GET['interest'])/12)/100+1;
    if (!is_float($period)||!is_int($amount)||!is_float($interest)) {
        echo 'Please enter a correct values!';
    }
    echo $_GET['currency'].' '.number_format($amount*pow($interest,$period),2,'.','');
} else {
    echo 'Please fill all fields!';
}
?>
</body>
</html>