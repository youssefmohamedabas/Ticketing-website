<!DOCTYPE html>
<html>

<head>
    <title> Registrition form </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f1f1f1;
        position: relative;
        padding-bottom: 58px;
        min-height: 100vh;
    }

    header {

        background-color: #333;
        color: #fff;
        padding: 20px;
    }


    article {
        background-color: #fff;
        padding: 100px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    article:last-child {
        margin-bottom: 0;
    }

    article h3 {
        margin: 10px 0 25px 0;
    }

    article p {
        margin-top: 16px;
        line-height: 24px;
    }

    footer {

        background-color: #333;
        color: #fff;
        padding: 20px;
        position: absolute;
        width: 100%;

    }

    @media(max-width:768px) {
        header {
            padding: 30px 20px;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 22px;
        }

        header p {
            font-size: 18px;
        }

        footer {
            padding: 30px 20px;
        }

        footer h1 {
            font-size: 36px;
            margin-bottom: 22px;
        }

        footer p {
            font-size: 18px;
        }

        article {
            margin-bottom: 16px;
            font-size: 14px;
        }

        article h3 {
            margin: 10px 0 20px 0;
        }

        article p {
            margin-top: 16px;
            line-height: 20px;
        }
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
        position: absolute;
    }

    .nav {
        width: 100%;
        background: #222222;
        height: 80px;
    }

    ul li {
        float: left;
        margin-top: 20px;
    }

    .container {
        background-color: rgb(215, 209, 203);
        padding: 30px;
    }

    .Copy {
        text-align: left;
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

    .happ:hover {
        background: #252525;
        color: #f1f1f1;
    }

    .move {
        float: right;
        position: bottom;
    }

    .nn {
        color: rgb(255, 250, 250);
    }

    .ww {
        color: black;

    }

    .sad {
        color: rgb(151, 200, 200);
    }
    </style>
    <script>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "gethint.php?q=" + str, true);
            xmlhttp.send();
        }
    }
    </script>
</head>

<body>
    <header>
        <div class="nav">
            <ul>
                <li><a class=" happ" href="#" target="_self">Basic1</a></li>
                <li><a class=" happ" href="#" target="_self"> Basic2</a></li>
                <li><a class=" happ" href="#" target="_self">Basic3</a></li>
                <li><a class=" happ" href="#" target="_self">Basic4</a></li>
                <li><a class=" happ" href="#" target="_self">Basic5</a></li>
                <li><a class=" happ" href="#" target="_self">Basic6</a></li>
                <li><a class=" happ" href="#" target="_self">Basic7</a></li>
                <li><a class=" happ" href="#" target="_self">Basic8</a></li>
                <li><a class=" happ" href="#" target="_self">Basic9</a></li>


            </ul>
        </div>

    </header>
    <article>

        <div class="container">

            <form method="POST" id="myForm">

                <div class="form-group">
                    <form action="">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name"
                            onkeyup="showHint(this.value)" required>
                    </form>
                    <p>Suggestions: <span id="txtHint"></span></p>
                </div>
                <div class="form-group">
                    <label for="user_name">Username</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" required>
                </div>
                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" required min="1900-01-01"
                        max="2023-12-31">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required minlength="8">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required
                        minlength="8">
                </div>
                <div class="form-group">
                    <label for="user_image">User Image</label>
                    <input type="file" class="form-control-file" id="user_image" name="user_image" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </article>
    <footer>
        <div>
            <ul>
                <li class="sad"><a target="_self">Element1</a></li>
                <li class="sad"><a target="_self"> Element2</a></li>
                <li class="sad"><a target="_self">Element3</a></li>
                <li class="sad"><a target="_self">Element4</a></li>
                <li class="sad"><a target="_self">Element5</a></li>
                <li class="sad"><a target="_self">Element6</a></li>
                <li class="sad"><a target="_self">Element7</a></li>
                <li class="sad"><a target="_self">Element8</a></li>
                <li class="sad"><a target="_self">Element9</a></li>

            </ul>
        </div>
        <br><br><br>
        <div>
            <ul>
                <li><a class=" happ" href="#" target="_self">Basic1</a></li>
                <li><a class=" happ" href="#" target="_self"> Basic2</a></li>
                <li><a class=" happ" href="#" target="_self">Basic3</a></li>
                <li><a class=" happ" href="#" target="_self">Basic4</a></li>
                <li><a class=" happ" href="#" target="_self">Basic5</a></li>
                <li><a class=" happ" href="#" target="_self">Basic6</a></li>
                <li><a class=" happ" href="#" target="_self">Basic7</a></li>
                <li><a class=" happ" href="#" target="_self">Basic8</a></li>
                <li><a class=" happ" href="#" target="_self">Basic9</a></li>


            </ul>
        </div>
        <br><br><br>
        <div>
            <ul>
                <li><a class=" happ" href="#" target="_self">Basic1</a></li>
                <li><a class=" happ" href="#" target="_self"> Basic2</a></li>
                <li><a class=" happ" href="#" target="_self">Basic3</a></li>
                <li><a class=" happ" href="#" target="_self">Basic4</a></li>
                <li><a class=" happ" href="#" target="_self">Basic5</a></li>
                <li><a class=" happ" href="#" target="_self">Basic6</a></li>
                <li><a class=" happ" href="#" target="_self">Basic7</a></li>
                <li><a class=" happ" href="#" target="_self">Basic8</a></li>
                <li><a class=" happ" href="#" target="_self">Basic9</a></li>

            </ul>
        </div>

        </div>
        <br><br><br><br>
        <div class="move">

            <p class="Copy">Copyright &copy; <script>
                document.write(new Date().getFullYear());
                </script>, Coding Journey</p>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />

                </svg>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>
            </a>
        </div>

    </footer>
</body>

</html>