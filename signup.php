<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        background: #0969a9;
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
        background: #000000;
    }

    .zzz {
        padding: 10px;
    }

    input {
        width: 60%;
        height: 40px;
    }

    label {
        font-size: 30px;
    }

    legend {
        background: fff;
        border: 3px;
        font-size: 40px;

    }

    fieldset {
        padding: 16%;
        width: 40%;
        color: rgb(0, 0, 0);
        margin-top: 0%;
        margin-bottom: 0%;
        margin-right: 0%;
        margin-left: 0%;
        background-color: #0969a9;
        float: left;
        border-radius: 30px;
        position: fixed;
        top: 25%;
        left: 30%;
    }



    .wq {
        border-radius: 20px;
    }

    .qq {
        float: left;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .rq {
        float: right;
        border-top: 10px;
        border-radius: 20px;
    }
    </style>



</head>

<body background="bb.jpg">
    <div class="nav">
        <ul>
            <li><a href="Mainpageadmin.php">Home</a></li>
            <li><a href="signup.php" target="_self">Add user</a></li>

            <li align="right"><a href="login.php">Logout</a></li>
        </ul>
    </div>

    <div>
        <fieldset class="zzz" align="center">

            <form method="POST">
                <h1> SIGN UP</h1>
                <br>
                <label class="qq">User name</label>
                <input name=" fn" type="text" class="rq" required> <br> <br><br>
                <label class="qq"> Email address</label>
                <input name=" email" type="email" class="rq" placeholder="Name@gmail.com" required><br><br><br>
                <label class="qq">Password</label>
                <input name=" password" type="password" class="rq" required><br><br><br>


                <label>role</label>
                <select type="role" name="role">
                    <option>admin</option>
                    <option>user</option>

                </select>
                <br><br>
                <input name="send" type="submit" value="Sign up" class="wq">

            </form>
        </fieldset>





</body background="MM.jpeg">

</html>
<?php
$username="you";
$password="123123";
$database=new PDO("mysql:host=localhost;dbname=newnew;charset=utf8;",$username,$password);
if(isset($_POST['send'])){
    $checkemail=$database->prepare("SELECT *FROM neww WHERE email=:email ");
    $email=$_POST['email'];
    $checkemail->bindParam("email",$email);
    $checkemail->execute();
if($checkemail->rowCount()>0){
    echo'<div class="alert alert-danger" role="alert">
    this email is already used
</div>' ;
}
else{
    $fn=$_POST['fn'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $addData=$database->prepare("INSERT INTO neww(username,password,email,role) VALUES('$fn','$password','$email','$role')");
if($addData->execute())
{
    echo' <div class="alert alert-success" role="alert">
    Succefully process
</div>';
}
else{
    echo' <div class="alert alert-success" role="alert">
    something went wrong
</div>';
}
    
    }
            }

?>