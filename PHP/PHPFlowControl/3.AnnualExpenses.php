<!DOCTYPE html>
<html>
<head>
    <title>Show Annual Expenses</title>
    <style>
        table, td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form>
    <label>Enter number of years</label>
    <input type="text" name="input">
    <input type="submit" value="Show coasts">
</form>
<?php
if ( isset($_GET['input']) ):
    if (intval($_GET['input']==0)) {
        die ('Invalid input!</br>Please enter a NUMBER bigger than 0!');
    }
?>
    <table>
        <thead>
        <tr><th>Year</th><th>January</th><th>February</th><th>March</th><th>April</th><th>May</th><th>June</th>
            <th>July</th><th>August</th><th>September</th><th>October</th><th>November</th><th>December</th>
            <th>Total:</th></tr>
        </thead>
        <tbody>
        <?php for ($i=0;$i<intval($_GET['input']);$i++): ?>
        <tr>
        <td><?php echo 2014-$i;?></td>

        <?php
        $sum=0;
        for ($j=0;$j<12;$j++):
            $current=rand(0,999);
            $sum+=$current;
        ?>
             <td> <?php echo $current; ?> </td>
        <?php endfor; ?>
            <td><?php echo $sum; ?></td>
        </tr>
        <?php endfor; ?>
        </tbody>
    </table>
<?php endif; ?>
</body>
</html>