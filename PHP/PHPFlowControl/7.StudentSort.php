<!DOCTYPE html>
<html>
<head>
    <title>Student Sorting</title>

    <style type="text/css">
        table,th, td {
            border: 1px solid black;
        }
        th {
            color: white;
            background-color: red;
        }
    </style>

    <script>
        var index = 0;
        function add(){
            index++;
            var newDiv = document.createElement('div');
            newDiv.setAttribute('id','input'+index);
            newDiv.innerHTML=' <input type="text" name="fname[]" placeholder="First Name">'+
                '<input type="text" name="lname[]" placeholder="Last Name">'+
                '<input type="email" name="mail[]" placeholder="Email">'+
                '<input type="number" name="score[]" placeholder="Score">'+
                '<button type="button" onclick="removeDiv('+index+')">-</button>'
            document.getElementById('container').appendChild(newDiv);
        }
        function removeDiv(id){
            var div=document.getElementById('input'+id);
            document.getElementById('container').removeChild(div);
        }
    </script>
</head>
<body>
<form>
    <div id="container">
    <script>
        add();
    </script>
    </div>
    <button type="button" onclick="add()">+</button>
    <label>Sort by:</label>
    <select name="sortBy">
        <option value="fname">First Name</option>
        <option value="lname">Last Name</option>
        <option value="mail">Email</option>
        <option value="score">Score</option>
    </select>
    <label>Order by:</label>
    <select name="orderBy">
        <option value="descending">Descending</option>
        <option value="ascending">Ascending</option>
    </select>
    <input type="submit" value="SUBMIT">
</form>
<?php

class Student {
    public $fname;
    public $lname;
    public $mail;
    public $score;

    function __construct($fname,$lname,$mail,$score){
        $this->fname=$fname;
        $this->lname=$lname;
        $this->mail=$mail;
        $this->score=$score;
    }
}

if ( isset($_GET['fname'])&&isset($_GET['lname'])&&isset($_GET['mail'])&&isset($_GET['score']) ) {

    $students=array();
    for ($i=0;$i<count($_GET['fname']);$i++) {
        if ($_GET['fname'][$i]==''||$_GET['lname'][$i]==''||$_GET['mail'][$i]==''||$_GET['score'][$i]=='') {
            die ('Please fill all fields!');
        }
        array_push($students,new Student($_GET['fname'][$i],$_GET['lname'][$i],$_GET['mail'][$i],$_GET['score'][$i]));
    }
?>
    <table>
        <thead>
        <tr><th>First Name</th><th>Last Name</th><th>Mail</th><th>Score</th></tr>
        </thead>
        <tbody>

    <?php
    if ($_GET['sortBy']=='fname') {
        uasort($students, function ($a, $b) {
            $first = $a->fname;
            $second = $b->fname;
            if ($_GET['orderBy']=='descending') {
                return ord( strtolower($first) ) - ord( strtolower($second) );
            } else {
                return ord( strtolower($second) ) - ord( strtolower($first) );
            }
        });
    } elseif($_GET['sortBy']=='lname') {
        uasort($students, function ($a, $b) {
            $first = $a->lname;
            $second = $b->lname;
            if ($_GET['orderBy']=='descending') {
                return ord( strtolower($first) ) - ord( strtolower($second) );
            } else {
                return ord( strtolower($second) ) - ord( strtolower($first) );
            }
        });
    } elseif($_GET['sortBy']=='score'){
        uasort($students, function ($a, $b) {
            $first = $a->score;
            $second = $b->score;
            if ($_GET['orderBy']=='descending') {
                return  $second-$first;
            } else {
                return  $first-$second;
            }

        });
    } elseif($_GET['sortBy']=='mail') {
        uasort($students, function ($a, $b) {
            $first = $a->mail;
            $second = $b->mail;
            if ($_GET['orderBy']=='descending') {
                return ord( strtolower($first) ) - ord( strtolower($second) );
            } else {
                return ord( strtolower($second) ) - ord( strtolower($first) );
            }
        });
    }

    foreach ($students as $student):
    ?>

            <tr>
                <td><?php echo $student->fname; ?></td>
                <td><?php echo $student->lname; ?></td>
                <td><?php echo $student->mail; ?></td>
                <td><?php echo $student->score; ?></td>
            </tr>


    <?php endforeach;
}
?>
        </tbody>
    </table>
</body>
</html>