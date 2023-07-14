<!DOCTYPE html>
<meta charset="utg-8">
<html>

<head>
    <title>Feedback</title>
    <style>
    body {
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;


    }

    .nav {
        width: 100%;
        background: #04416b;
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

    .gmail {
        width: 30px;
        height: 25px;

    }

    fieldset {
        width: 400px;
        position: absolute;
        text-align: center;
        left: 35%;
        top: 30%;
        border-radius: 50px;
        border-color: #0969a9;
        background-color: #0969a9;
    }

    .txt {
        width: 200px;
        height: 18px;
    }

    .sub {
        width: 100px;
        margin-bottom: 0%;
        border-radius: 10px;
        font-weight: bold;
    }
    </style>

</head>

<body background="bb.jpg">
    <div class="nav">
        <ul>
            <li><a href="Mainpageall.php">Home</a></li>
            <li><a href="login.php" target="_self"> login</a></li>
            <li><a href="Feed.php">Feedback</a></li>
            <li><a href="contactus.php" target="_self">contactus</a></li>

        </ul>
    </div>
    <fieldset>
        <form>
            <h2>Feedback</h1>
                <textarea class="txt" required></textarea>
                <br><br>
                <input type="submit" value="Send" class="sub">
                <br><br><br>
        </form>
    </fieldset>

</body>

</html>