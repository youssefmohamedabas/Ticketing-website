<!DOCTYPE html>
<meta charset="utf-8">
<html>

<head>
    <title>Userhome</title>
    <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>
    <style>
    body {
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;



    }

    .nav {
        width: 100%;
        background: #045a94;
        height: 80px;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
        position: absolute;
    }

    ul li {
        float: left;
        margin-top: 20px;
    }

    ul li a {
        width: 150px;
        color: white;
        display: block;
        text-decoration: none;
        font-size: 20px;
        text-align: center;
        padding: 10px;
        border-radius: 10px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-weight: bold;
    }

    a:hover {
        background: #669900;
    }

    .rr {
        color: aliceblue;
    }

    .rr {
        color: aliceblue;
    }

    .x {
        font-size: 25px;
    }

    fieldset {
        width: 500px;

        position: absolute;
        text-align: center;
        left: 30%;
        top: 30%;
        background-color: #0d73b7;

        border-radius: 20px;
    }

    label {
        font-size: 20px;
    }

    .xx {
        font-size: 30px;

    }

    .ooo {
        width: 100px;
        height: 30px;
    }

    .Device {
        width: 200px;
        height: 20px;
    }

    .kind {
        width: 400px;
        height: 20px;
    }
    </style>
</head>

<body background="bb.jpg">
    <div class="nav">
        <ul>
            <li><a href="Mainpageuser.php">Home</a></li>
            <li align="right"><a href="login.php">Logout</a></li>
        </ul>
    </div>

    <div>
        <fieldset>
            <H1 align="center" class="ww"> Issue information</H1>
            <form method="POST">
                <br>
                <label>Device name</label><input name="devicename" type="text" class="Device" required>

                <label>Issue kind</label>

                <select name="issuekind">
                    <option>issue1</option>
                    <option>issue2</option>
                    <option>issue3</option>
                    <option>issue4</option>
                </select>
                <br><br>

                <label class="x">Note</label><br><textarea name="note" required></textarea> <br><br>


                <input name="send" class="ooo" type="submit" value="Submit">
            </form>
        </fieldset>
    </div>
</body>

</html>
<?php
$username="root";
$password="";
$database=new PDO("mysql:host=localhost;dbname=newnew;charset=utf8;",$username,$password);
if(isset($_POST['send'])){
    $devicename=$_POST['devicename'];
    $issuekind=$_POST['issuekind'];
    $note=$_POST['note'];
    $addData=$database->prepare("INSERT INTO device(DeviceName,Issuekind,Note) VALUES('$devicename','$issuekind','$note')");
    $addData->execute();

}
?>