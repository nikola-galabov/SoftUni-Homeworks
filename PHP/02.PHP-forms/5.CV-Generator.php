<html>
<head>
    <title>CV Generator</title>
    <style type="text/css">
        h1{
            margin-top: 5px;
            margin: 0;
        }
        #input,#CV{
            display: inline-block;
            width: 45%;
            float: left;
            margin: 5px;
        }
        table,th,td {
            border:1px solid black;
            margin: 6px;
        }
        table {
            height:auto;
            width: 100%;

        }
    </style>
</head>
<body>
<div id="input">
<form>
    <fieldset>
        <legend>Personal Information</legend>
        <input type="text" placeholder="First Name" name="fname"><br>
        <input type="text" placeholder="Last Name" name="lname"><br>
        <input type="email" placeholder="Email" name="mail"><br>
        <input type="tel" placeholder="Phone number" name="tel"><br>
        <label>Male</label>
        <input type="radio" name="gender" value="male">
        <label>Female</label>
        <input type="radio" name="gender" value="female"><br>
        <label>Birth Date</label><br>
        <input type="date" name="bdate"><br>
        <label>Nationality</label><br>
        <select name="nation">
            <option>Bulgarian</option>
            <option>English</option>
            <option>American</option>
            <option>French</option>
            <option>German</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Last Work Position</legend>
        <label>Company Name</label>
        <input type="text" name="company"><br>
        <label>From</label>
        <input type="date" name="from"><br>
        <label>To</label>
        <input type="date" name="to"><br>
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>
        <label>Programing Languages</label><br>
        <div id="pcLang"><input type="text" name="compLeng[]">
            <select name="level[]">
                <option>Beginner</option>
                <option>Programmer</option>
                <option>Ninja</option>
            </select></div>

        <button type="button" onclick="removePcLang()">Remove Language</button>
        <button type="button" onclick="addPcLang()">Add Language</button>
    </fieldset>
    <fieldset>
        <legend>Other Skills</legend>
        <label>Languages</label>

        <div id="humanLanguages">
        <input type="text" name="language[]">
        <select name="comprehension[]">
            <option>-Comprehension-</option>
            <option>beginner</option>
            <option>advanced</option>
            <option>intermediate</option>
        </select>
        <select name="reading[]">
            <option>-Reading-</option>
            <option>beginner</option>
            <option>advanced</option>
            <option>intermediate</option>
        </select>
        <select name="writing[]">
            <option>-Writing-</option>
            <option>beginner</option>
            <option>advanced</option>
            <option>intermediate</option>
        </select>
        </div>
        <button onclick="removeHumanLanguage()" type="button">Remove Language</button>
        <button onclick="addHumanLanguage()" type="button">Add Language</button><br>
        <label>Driver License</label><br>
        <label>A</label>
        <input type="checkbox" value="A" name="drLicense[]">
        <label>B</label>
        <input type="checkbox" value="B" name="drLicense[]">
        <label>C</label>
        <input type="checkbox" value="C" name="drLicense[]">
    </fieldset>
    <input type="submit" value="Generate CV">
</form>
</div>
<?php if(isset($_GET['fname'])&&isset($_GET['lname'])&&isset($_GET['mail'])&&isset($_GET['tel'])&&isset($_GET['gender'])
&&isset($_GET['nation'])&&isset($_GET['bdate'])&&isset($_GET['company'])&&isset($_GET['from'])&&isset($_GET['to'])
    &&isset($_GET['compLeng'])&&isset($_GET['drLicense'])&&isset($_GET['language'])&&isset($_GET['level'])
    &&isset($_GET['comprehension'])&&isset($_GET['reading'])&&isset($_GET['writing'])):
    /* The validation didn't work..
     * if ($_GET['fname']!=addcslashes($_GET['fname'],'[^a-zA-Z]+')||strlen($_GET['fname'])>20
        ||strlen($_GET['fname'])<2) {
        var_dump(addcslashes($_GET['fname'],'[^a-zA-Z]+'));
        var_dump($_GET['fname']);
        echo preg_match('[^a-zA-Z]+',$_GET['fname']);
        echo 'Invalid First Name!';
        die;
    }
    if ($_GET['lname']!=addcslashes($_GET['lname'],'[^a-zA-Z]+')||strlen($_GET['lname'])>20
        ||strlen($_GET['lname'])<2) {
        echo 'Invalid Last Name!';
        die;
    }
    if($_GET['mail']!=addcslashes($_GET['mail'],'[a-zA-Z1-9]+@+[a-zA-Z1-9]+.+[a-zA-Z]')){
        echo 'Invalid Email!';
        die;
    }
    if ($_GET['tel']!=addcslashes($_GET['tel'],'[^0-9-+ ]')) {
        echo 'Invalid Telephone!';
        die;
    }

    if ($_GET['language']!=addcslashes($_GET['language'],'[^a-zA-Z]+')||strlen($_GET['language'])>20
        ||strlen($_GET['language'])<2) {
        echo 'Invalid Language!';
        die;
    }
    if ($_GET['company']!=addcslashes($_GET['company'],'[^a-zA-Z1-9]+')||strlen($_GET['company'])>20
        ||strlen($_GET['company'])<2) {
        echo 'Invalid Company!';
        die;
    }*/
    ?>
<div id="CV">
    <h1>CV</h1>
    <table>
        <thead><tr><th colspan="2">Personal Information</th></tr></thead>
        <tbody>
        <tr>
            <td>First Name</td>
            <td>
                <?php
                    echo $_GET['fname'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>
                <?php
                    echo $_GET['lname'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <?php
                echo $_GET['mail'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>
                <?php
                     echo $_GET['tel'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <?php
                    echo $_GET['gender'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td>
                <?php
                    echo $_GET['bdate'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Nationality</td>
            <td>
                <?php
                    echo $_GET['nation'];
                ?>
            </td>
        </tr>
        </tbody>
    </table>
    <table>
        <thead>
        <tr><th colspan="2">Last Work Position</th></tr>
        </thead>
        <tbody>
        <tr>
            <td>Company Name</td>
            <td>
                <?php
                echo $_GET['company'];
                ?>
            </td>
        </tr>
        <tr>
            <td>From</td>
            <td>
                <?php
                echo $_GET['from'];
                ?>
            </td>
        </tr>
        <tr>
            <td>To</td>
            <td>
                <?php
                echo $_GET['to'];
                ?>
            </td>
        </tr>
        </tbody>
    </table>
    <table>

        <thead><tr><th colspan="3">Computer Skills</th></tr></thead>
        <tbody>
        <tr>
            <?php $rowspan=count($_GET['compLeng'])+1;?>
            <td rowspan="<?php echo$rowspan?>">Programing Languages</td>
            <th>Language</th>
            <th>Skill Level</th>
        </tr>
                <?php
                foreach ($_GET['compLeng'] as $key => $value):
                ?>
        <tr><td>
                <?php echo $value;
                ?>
            </td>
            <td>
                <?php
                echo $_GET['level'][$key];
                ?>
            </td>
            <?php endforeach; ?>
        </tr>
        </tbody>
    </table>
    <table>
        <thead><tr><th colspan="5">Other Skills</th></tr></thead>
        <tbody>
        <?php $rowspan=count($_GET['language'])+1;?>
        <tr><td rowspan="  <?php echo $rowspan;?>">Languages</td><th>Language</th><th>Comprehension</th><th>Reading</th><th>Writing</th></tr>
        <?php
        foreach ($_GET['language']as $key=>$value):
        ?>
        <tr><td>
                <?php echo $value;
                ?>
            </td>
            <td>
                <?php
                echo $_GET['comprehension'][$key];
                ?>
            </td>
            <td>
                <?php
                echo $_GET['reading'][$key];
                ?>
            </td>
            <td>
                <?php
                echo $_GET['writing'][$key];
                ?>
            </td>
            <?php endforeach; ?>
               </tr>
        <tr>
            <td>Driver's License</td>
        <td colspan="4">
            <?php

                echo join(', ',$_GET['drLicense']);

            ?>
        </td>
        </tr>
        </tbody>

    </table>
</div>
<?php
else:
echo 'Please Fill All Fields!';
endif;
?>

<script>
    var index = 0;
    var lastIndex=0;
    function addHumanLanguage(){
        index++;
        lastIndex=index;
        var newDiv = document.createElement('div');
        newDiv.setAttribute('id',index);
        newDiv.innerHTML='<input type="text" name="language[]">'+
            '<select name="comprehension[]">'+
            '<option>-Comprehension-</option>/<option>beginner</option>'+
            '<option>advanced</option>'+
            '<option>intermediate</option></select><select name="reading[]">'+'' +
            '<option>-Reading-</option><option>beginner</option><option>advanced</option><option>intermediate</option></select>'+
            '<select name="writing[]"><option>-Writing-</option><option>beginner</option><option>advanced</option>'+
            '<option>intermediate</option></select>';
        document.getElementById('humanLanguages').appendChild(newDiv);
    }
    function removeHumanLanguage(){
        var lastField = document.getElementById(lastIndex);
        document.getElementById('humanLanguages').removeChild(lastField);
        lastIndex--;
    }
    var pcIndex=0;
    var pcLastIndex;
    function addPcLang(){
        pcIndex++;
        pcLastIndex=pcIndex;
        var newDiv = document.createElement('div');
        newDiv.setAttribute('id',pcIndex);
        newDiv.innerHTML='<input type="text" name="compLeng[]">'+
            '<select name="level[]">'+
            '<option>Beginner</option>'+
            '<option>Programmer</option>'+
            '<option>Ninja</option>'+
            '</select>';
        document.getElementById('pcLang').appendChild(newDiv);
    }

    function removePcLang(){
        var lastField = document.getElementById(pcLastIndex);
        document.getElementById('pcLang').removeChild(lastField);
        pcLastIndex--;
    }
</script>
</body>
</html>