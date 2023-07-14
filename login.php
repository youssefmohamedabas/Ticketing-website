<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <title> sign in</title>
    <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>
    <style>
    body {
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        margin: 0;
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
        background: #669900;
    }

    fieldset {
        padding: 10px;
        ;
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
        top: 28%;
        left: 28%;
    }

    legend {
        background: fff;
        border: 3px;
        font-size: 40px;

    }

    input {
        width: 105%;
        height: 40px;
    }



    label {
        font-size: 35px;
    }

    .sizeing {
        font-size: 20px;
    }

    .sixx {
        width: 10%;
    }

    .ooo {
        width: 300px;
        height: 50px;
        background-color: black;
        color: aliceblue;
        border-radius: 20px;
    }

    .nono {
        background-color: black;
        color: aliceblue;
        border-radius: 10px;
        width: 400px;
        float: right;
    }

    .gogo {
        background-color: black;
        color: aliceblue;
        border-radius: 10px;
        width: 400px;
        float: right;
    }

    .forget {
        font-weight: bold;
        font-size: medium;

        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: rgb(0, 0, 0);
        float: right;
    }

    .pop {
        font-weight: bolder;
        float: left;
    }

    ::placeholder {
        font-size: x-large;

    }

    .roles {
        font-weight: bold;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: x-large;
    }
    </style>
</head>

<body background="bb.jpg"">
    <div class=" nav">
    <ul>
        <li><a href="Mainpageall.php">Home</a></li>
        <li><a href="login.php" target="_self"> login</a></li>
        <li><a href="Feed.php">Feedback</a></li>

        <li><a href="contactus.php">contactus</a></li>

    </ul>
    </div>
    <fieldset align="center">
        <legend> SIGN IN</legend>
        <form method="POST" align="center">

            <br><br>
            <label class="pop">Username</label>
            <input name="username" type="text" placeholder="NAME" class="nono" required><br><br><br>
            <label class="pop">Password</label>
            <input name="password" type="password" placeholder="PASSWORD" class="gogo" required><br><br><br><br>

            <label class="roles">role</label> <select type="role" class="role" name="role">
                <option>admin</option>
                <option>user</option>

            </select><br><br>
            <input name="login" class="ooo" type="submit" value="SIGN IN"> <br><br>
            <a href="Forget_password.php" class="forget">Forget password</a><br><br>

        </form>
    </fieldset>
</body>

</html>
<?php
session_start();
if(isset($_POST['login'])){
$username="root";
$password="";
$database=new PDO("mysql:host=localhost;dbname=newnew;charset=utf8;",$username,$password);
$R=$database->prepare("SELECT *from neww where username = :username AND password = :password AND role = :role" ); 
$R->bindParam("role",$_POST['role']);
$R->bindParam("username",$_POST['username']);
$R->bindParam("password",$_POST['password']);
$R->execute();
if($R->rowcount()===1){
    $user=$R->fetchObject();
    if($user->role==="admin")
    {
        header("location:Mainpageadmin.php",true);
        die("");
    }
    else{
        header("location:Mainpageuser.php",true);
        die("");
    }
    
}
else
{
    echo'Invalid username or password';
}
}
?>