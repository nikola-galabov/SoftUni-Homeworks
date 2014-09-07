<!DOCTYPE html>
<html>
<head>
    <title>Rich people problems</title>
    <style>
        table,th,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form>
    <label>Enter cars</label>
    <input type="text" name="input">
    <input type="submit" value="Show results">
    <?php
    if (isset($_GET['input'])):
    if ($_GET['input']=='') {
        die ('<div>Please enter some cars!</div>');
    }
        $cars=explode(', ',$_GET['input']);
    ?>
    <table>
        <thead>
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $colors=['yellow','red','blue','green','black','gray','orange'];
        foreach ($cars as $car):
        ?>
            <tr>
                <td><?php echo htmlentities($car) ?></td>
                <td><?php echo $colors[rand(0,count($colors)-1)]; ?></td>
                <td><?php echo rand(1,5); ?></td>
            </tr>
        <?php
        endforeach;
        endif;
        ?>
        </tbody>
    </table>
</form>
</body>
</html>