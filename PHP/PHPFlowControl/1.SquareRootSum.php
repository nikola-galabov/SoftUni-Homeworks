<!DOCTYPE html>
<html>
<head>
    <title>Square Root Sum</title>
    <style>
        table,td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Number</th>
        <th>Square</th>
    </tr>
    <tbody>
    <?php
    $sumSqrt=0;
    for ($i=0; $i<=100;$i++) {
        if ($i%2==0) {
            echo '<tr><td>'.$i.'</td><td>'.round(sqrt($i),2).'</td></tr>';
            $sumSqrt+=round(sqrt($i),2);
        }
    }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <th>Total:</th>
        <td>
            <?php
            echo round($sumSqrt,2);
            ?>
        </td>
    </tr>
    </tfoot>
</table>
</body>
</html>