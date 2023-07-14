<!DOCTYPE html>
<html>

<head>
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

    table {
        width: 800px;
        height: 400px;
        background-color: #045a94;
        position: absolute;
        border-color: #045a94;
        left: 23%;
        top: 25%;
    }

    td {
        font-size: xx-large;

        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: rgb(0, 0, 0);
    }

    th {
        font-size: xx-large;

        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: rgb(0, 0, 0);
    }

    caption {
        font-size: xx-large;
        font-family: sans-serif;
    }
    </style>


</head>

<body background="bb.jpg">
    <div class="nav">
        <ul>
            <li><a href="Mainpageall.php">Home</a></li>

            <li><a href="login.php" target="_self"> login</a></li>
            <li><a href="Feed.php">Feedback</a></li>
            <li><a href="contactus.php">contact</a></li>

        </ul>
    </div>
    <table border="3">
        <caption><b>Technical support</b></caption>
        <tr>
            <th>NAME</th>
            <th>PHONE NUMBER</th>
            <th colspan="2"> Email</th>
        </tr>
        <tr>
            <td>Romani</td>
            <td>01220048465</td>
            <td>romani.labib@gmail.com</td>

        </tr>
        <tr>
            <td>Moataz </td>
            <td>01064115124</td>
            <td>dfdfdwr19@gmial.com</td>

        </tr>
        <tr>
            <td>Youssef</td>
            <td>01129395231</td>
            <td>3bs@gmail.com</td>

        </tr>
    </table>


</body>

</html>