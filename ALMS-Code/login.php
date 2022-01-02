<html>

<head>
    <title>
        Login To Donate..
    </title>

    <link rel="stylesheet" type="text/css" href="home.css">

</head>

<body>
    <section class="header">
        <nav>
            <img src="logo.png" height='100px' width="100pxs" \>
            <div class="nav-links">
                <ul>

                    <li><a href="index.php" class="he-btn">BACK</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <div class="loginbox">

        <h1> Login </h1>
        <br>
        <br>
        <form name="f1" action="loginup.php" method="POST">
            <p> email</p>
            <input type="text" name="mailuid" placeholder="email@gmail.com">
            <p> Password</p>
            <input type="password" name="pwd" placeholder="password"><br>
            <br>
            <br>
            <br>
            <p> <input type="submit" id="btn" name="login-submit"></p>
            </p>
            <a href="#">Forgot password?</a><br>
            <a href="sign.php">Don't have an account?</a>

        </form>
    </div>
    <footer class='footer-area'>
        <div class="footer-wave-box ">
            <div class="footer-wave footer-animation "></div>
        </div>
        <div class="thu ">
            <a href='' class="he-btn ">SUPPORT OUR MISSION </a>
            <a href='' class="he-btn ">JOIN US </a>
        </div>
        <div class="main ">
            <div class="footer ">
                <div class="single-footer ">
                    <h4>About us</h4>
                    <p class="cla ">this the about this is the about us </p>
                    <div class="footer-social ">
                        <a href=" "><i class="fa fa-facebook " ></i></a>
                        <a href=" "><i class="fa fa-twitter " ></i></a>
                        <a href=" "><i class="fa fa-instagram " ></i></a>
                        <a href=" "><i class="fa fa-linkedin " ></i></a>
                    </div>
                </div>
                <div class="single-footer ">
                    <h4>main menu</h4>
                    <ul>
                        <li><a href=" "><i class="fa fa-chevron-right "></i>home </a></li>
                        <li><a href=" "><i class="fa fa-chevron-right "></i>about us</a></li>
                        <li><a href=" "><i class="fa fa-chevron-right "></i>services</a></li>
                        <li><a href=" "><i class="fa fa-chevron-right "></i>SOMETHING</a></li>
                        <li><a href=" "><i class="fa fa-chevron-right "></i>connect us</a></li>
                    </ul>

                </div>

                <div class="single-footer ">
                    <h4>quick links</h4>
                    <ul>
                        <li><a href=" "><i class="fa fa-chevron-right "></i>privacy policy </a></li>
                        <li><a href=" "><i class="fa fa-chevron-right "></i>terms&conditions</a></li>
                        <li><a href=" "><i class="fa fa-chevron-right "></i>disclaim</a></li>
                    </ul>
                </div>

                <div class="single-footer ">
                    <h4>contact us</h4>
                    <ul>
                        <li><a href=" "><i class="fa fa-map-marker "></i>Asia,india</a></li>
                        <li><a href=" "><i class="fa fa-mobile "></i>+9112356789</a></li>
                        <li><a href=" "><i class="fa fa-envelope "></i>info.com</a></li>
                    </ul>
                </div>
            </div>
            <script>
                function validation() {
                    var id = document.f1.user.value;
                    var ps = document.f1.pass.value;
                    if (id.length == "" && ps.length == "") {
                        alert("User Name and Password fields are empty");
                        return false;
                    } else {
                        if (id.length == "") {
                            alert("User Name is empty");
                            return false;
                        }
                        if (ps.length == "") {
                            alert("Password field is empty");
                            return false;
                        }
                    }
                }
            </script>


            <body>

</html>