<!DOCTYPE html>
<html>
<head>
    <title>Sidebar builder</title>
    <style type="text/css">
        ul {
            background: linear-gradient(red,rosybrown);
            width: 150px;
            border: 1px solid black;
            border-radius: 5px;
            margin: 5px;
            padding: 0;
        }
        li {
            list-style: circle;
            list-style-position: inside;
            padding-left: 40px;
        }
        ul h3 {
            color: white;
            margin: 0;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<form>
    <label>Categories:</label>
    <input type="text" name="categories">
    <label>Tags</label>
    <input type="text" name="tags">
    <label>Months</label>
    <input type="text" name="months">
    <input type="submit" value="Generate">
</form>

<?php
if ( isset($_GET['categories'])&&isset($_GET['tags'])&&isset($_GET['months']) ):

    $categories = explode(', ',$_GET['categories']);
    $tags = explode(', ',$_GET['tags']);
    $months = explode(', ',$_GET['months']);
?>


    <ul>
        <h3>Categories</h3>
        <hr/>
        <?php
        foreach ($categories as $category):
            ?>

            <li><a href=""><?php echo $category ?></a></li>

        <?php endforeach; ?>

    </ul>

    <ul>
        <h3>Tags</h3>
        <hr/>

        <?php
        foreach ($tags as $tag):
            ?>

            <li><a href=""><?php echo $tag ?></a></li>

        <?php endforeach; ?>

    </ul>

    <ul>
    <h3>Months</h3>
    <hr/>
    <?php
    foreach ($months as $month):
        ?>

        <li><a href=""><?php echo $month ?></a></li>

    <?php endforeach; ?>

    </ul>


<?php endif; ?>

</body>
</html>