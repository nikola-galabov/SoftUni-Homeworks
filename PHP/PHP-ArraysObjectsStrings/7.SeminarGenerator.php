<!DOCTYPE html>
<html>
<head>
    <title>SoftUni Seminar Generator</title>
    <style>
        textarea {
            display: block;
            width: 100%;
            height: 150px;
        }
        table{
            border-collapse: collapse;
            border-spacing: 0;
            border: 2px solid #ddd;
        }
        th {
            background-color: #234465;
            color: white;
            padding: 10px;
            border-left: 1px solid white;
        }
        td {
            padding: 10px;
            border-left: 1px solid white;
        }

        .singUp {
            text-decoration: none;
            background-color: orange;
            color:white;
            border: 1px solid black;
            padding: 5px;
        }
        .singUp:hover {
            color: #ddd;
        }
        a {
            color: black;
        }
        a:hover{
            color: red;
        }
        tbody tr:nth-child(odd){
            background-color: #ddd ;
        }
        tbody tr:nth-child(even) td{
            background-color: white;
            border-right: 2px solid #ddd;
        }
        .info {
            display: none;
            position: absolute;
            width: 300px;
            background-color: cornsilk;
            border: 1px solid black;
            padding: 5px;
        }
        .info span {
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
</head>
<body>
<form>
    <textarea name="input">

    </textarea>
    <label>Sort by:</label>
    <select name="sort">
        <option value="name">Name</option>
        <option value="date">Date</option>
    </select>
    <label>Order by:</label>
    <select name="order">
        <option value="descending">Descending</option>
        <option value="ascending">Ascending</option>
    </select>
    <input type="submit" value="Submit">

</form>

<?php
class Seminar {
    public $name;
    public $lecturer;
    public $date;
    public $information;

    function __construct($name,$lecturer,$date,$information){
        $this->name = $name;
        $this->lecturer = $lecturer;
        $this->date = $date;
        $this->information = $information;
    }
}

if ( isset($_GET['input']) ):
    $_GET['input'] = trim($_GET['input']);
    preg_match_all('/(.+)-([\w ]+)-(\d\d-\d\d-\d\d\d\d \d\d:\d\d) (.+)/',$_GET['input'],$results);
    $seminars = array();
    if ( !isset($results[1][0])||!isset($results[2][0])||!isset($results[3][0])||!isset($results[4][0]) ) {
        die('Invalid Input!');
    }
    for ($i=0;$i<count($results); $i++) {
        $seminars[] = new Seminar($results[1][$i],$results[2][$i],$results[3][$i],$results[4][$i]);
    }

    if ( $_GET['sort']=='name' ) {
        uasort($seminars, function($a,$b) {
            if ($_GET['order']=='ascending') {

                return ord(strtolower($a->name))-ord(strtolower($b->name));

            } else {

                return ord(strtolower($b->name))-ord(strtolower($a->name));
            }
        });
    } elseif ( $_GET['sort']=='date' ) {
        uasort($seminars, function($a,$b){
            if ($_GET['order']=='ascending') {
                return intval(preg_replace('/(\d\d)-(\d\d)-(\d\d\d\d) (\d\d):(\d\d)/','\3\2\1',$a->date))-
                intval(preg_replace('/(\d\d)-(\d\d)-(\d\d\d\d) (\d\d):(\d\d)/','\3\2\1',$b->date));
            } else {
                return intval(preg_replace('/(\d\d)-(\d\d)-(\d\d\d\d) (\d\d):(\d\d)/','\3\2\1',$b->date))-
                intval(preg_replace('/(\d\d)-(\d\d)-(\d\d\d\d) (\d\d):(\d\d)/','\3\2\1',$a->date));
            }
        });
    }
?>
    <table>
        <thead>
        <tr><th>Seminar Name</th><th>Date</th><th>Participate</th></tr>
        </thead>
        <tbody>

        <?php
        $id=0;
        foreach($seminars as $seminar):
            $id++;
        ?>

            <tr><td><a href=''  onmouseout="removePopUp(<?php echo $id; ?>)" onmousemove="popUp(<?php echo $id; ?>)"><?php echo $seminar->name; ?></a></td><td><?php echo $seminar->date; ?></td><td><a class="singUp" href="">SING UP</a></td></tr>

            <div id = "<?php echo $id; ?>" class="info">
                <span>Lecturer:</span> <?php echo $seminar->lecturer; ?> <br/>
                <span>Details:</span> <?php echo $seminar->information ?>
            </div>

        <?php endforeach; ?>

        </tbody>
    </table>

<?php endif; ?>
<script>
    function popUp(id) {
        var info=document.getElementById(id);
        info.style.display='block';
        info.style='position: absolute; top;';
        info.style.left=event.clientX+20+'px';
        info.style.top=event.clientY+20+'px';
    }
    function removePopUp(id) {
        var info=document.getElementById(id);
        info.style.display='none';
    }
</script>
</body>
</html>