<html>

<head>
    <title>alms</title>
    <meta name="viewport" content="with-device-width,intial-scale-1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="total">
        <section class="header">
            <nav>
                <img src="logo.png" height='100px' width="100pxs">
                <div class="nav-links">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">CONNECT WITH US</a></li>
                        <li><a href="#">MORE</a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="">link1</a></li>
                                    <li><a href="" class="no5">link2</a></li>
                                    <li><a href="" class="no6">link3</a></li>
                                </ul>
                            </div>


                        </li>
                        <li><a href="login.php" class="he-btn">LOG IN</a></li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="diff">
            <div class="content">
                <div class="left-col">
                    <h2>LISTEN <br>TO<br> US</h2>
                </div>
                <div class="right-col">
                    <p>click here to listen</p>
                    <img src="images.png" id=icon>
                </div>
                <audio id="mysong">
                <source src="C:\xampp\htdocs\include\audio\Motivational_Speech_by_a_handicapped_women(256k).mp3"  type="audio/mp3">
                </audio>

                <script>
                    var mysong = document.getElementById("mysong");
                    var icon = document.getElementById("icon");
                    icon.onclick = function() {
                        if (mysong.paused) {
                            mysong.play();
                            icon.src = "images (1).png";
                        } else {
                            mysong.pause();
                            icon.src = "images.png";
                        }
                    }
                </script>

        </section>
        <section class="content1">
            <h1>WHO WE ARE</h1>
            <br><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
                <a href="#" target="_blank" class="now">know more</a>
                <img src="WhatsApp Image 2021-09-07 at 10.16.53 AM.jpeg" class="imp">
        </section>
        <section class="next-content">
            <h1 class="no11">WHAT WE DO</h1>
            <br><br>
            <p class="no12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    <br><br>
                    <div class="row">
                        <div class="serv-col">
                            <h4>DONATE</h4>
                            <p class="no1">we need you alms</p>
                            <img src="donation.jpg" class="img">
                            <div class="layer">
                                <a class="he-btnn1" href="login.html">
                                    <h3>KNOW MORE</h3>
                                </a>
                            </div>
                        </div>
                        <div class="serv-col">
                            <h4>RECIEVERS</h4>
                            <p class="no2">book your item</p>
                            <img src="items.jpg" class="knou">
                            <div class="layer">
                                <a class="he-btnn1" href="view.html">
                                    <h3>KNOW MORE</h3>
                                </a>
                            </div>
                        </div>
                        <div class="serv-col">
                            <h4>VOLUNTEERING</h4>
                            <p class="no3">Volunteer and get certified</p>
                            <img src="volunteering.jpg" class="someee">
                            <div class="layer">
                                <a href="">
                                    <h3 class="he-btnn1">KNOW MORE</h3>
                                </a>
                            </div>
                        </div>
                    </div>
        </section>

        <!---- <section class="team">
        <h1>OUR TEAM</h1>
        <br><br>
        <p class="new">MEET OUR TEAM</p>
        <div class="container">
            <div class="indicator">
                <span class="btn active"></span>
                <span class="btn"></span>
                <span class="btn"></span>
                <span class="btn"></span>
            </div>
            <div class="teammembers">
                <div class="slide-row" id="slide">
                    <div class="slide-col">
                        <div class="user-text">
                            <p>MY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHING</p>
                            <h3>simple1</h3>
                        </div>
                        <div class="user-img">
                            <img src="C:\xampp\htdocs\include\images\CLAW-HSA Joint Training - Mar 2020 (16).JPG">
                        </div>
                    </div>
                    <div class="slide-col">
                        <div class="user-text">
                            <p>MY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHING</p>
                            <h3>simple1</h3>
                        </div>
                        <div class="user-img">
                            <img src="C:\xampp\htdocs\include\images\CLAW-HSA Joint Training - Mar 2020 (16).JPG">
                        </div>

                    </div>
                    <div class="slide-col">
                        <div class="user-text">
                            <p>MY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHING</p>
                            <h3>simple1</h3>

                        </div>
                        <div class="user-img">
                            <img src="C:\xampp\htdocs\include\images\CLAW-HSA Joint Training - Mar 2020 (16).JPG">

                        </div>

                    </div>
                    <div class="slide-col">
                        <div class="user-text">
                            <p>MY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHINGMY NAME IS SOMETHING</p>
                            <h3>simple1</h3>

                        </div>
                        <div class="user-img">
                            <img src="C:\xampp\htdocs\include\images\CLAW-HSA Joint Training - Mar 2020 (16).JPG">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script>
            var btn = document.getElementsByClassName("btn");
            var slide = document.getElementById("slide");
            btn[0].onclick = function() {
                slide.style.transform = "translateX(0px)";
                for (i = 0; i < 4; i++) {
                    btn[i].classList.remove("active");
                }
                this.classList.add("active");

            }
            btn[1].onclick = function() {
                slide.style.transform = "translateX(-2400px)";
                for (i = 0; i < 4; i++) {
                    btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[2].onclick = function() {
                slide.style.transform = "translateX(-480px)";
                for (i = 0; i < 4; i++) {
                    btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[3].onclick = function() {
                slide.style.transform = "translateX(-6400px)";
                for (i = 0; i < 4; i++) {
                    btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
        </script>
    </section>-->
        <div class="head">
            <h2>PRESENTING TEAM ALMS</h2>
        </div>
        <section class="showcase">
            <header>
                <h2 class="logo">ALMS</h2>

            </header>
            <video src="videos/Triple World Record 2020 - Trailer - Jan 2020.mp4" muted loop autoplay id="vid"></video>
            <div class="overlay"></div>
            <div class="text">
                <h2>MEET OUR TEAM </h2>
                <h3>OUR TEAM STEPS IN WITH YOU</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a href="#">KNOW MORE</a>
            </div>
        </section>


        <section class="testimonials">
            <h1 class="oka">OUR DONAR'S SAYS</h1>
            <p class="super">""our donars shares there exprirence with us""</p><br><br>
            <div class="imp2">
                <!---- <img src="emoj.jpg" class="ani1">
               -->
            </div>

            <div class="roww">
                <div class="testimonials-col">
                    <img src="C:\xampp\htdocs\include\images\CLAW-HSA Joint Training - Mar 2020 (16).JPG">
                    <div class="edit">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <h3>-SAM </h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <!----
                    <div class="testimonials-cols">
                        <img src=" C:\xampp\htdocs\include\images\CLAW-HSA Joint Training - Mar 2020 (16).JPG ">
                        <div class="edit ">
                            <h3>SUCCCESSS the rating is really great and this so funny some <br>-sam </h3>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star-half-o "></i>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        <section class="cta ">
            <img src="WhatsApp Image 2021-09-07 at 10.16.45 AM.jpeg" class="anni2">
            <h1 class="comp"> SIGN UP TO DONATE</h1>
            <a href='' class="but ">SIGN UP NOW</a>

        </section>
        <footer class='footer-area'>
            <div class="footer-wave-box ">
                <div class="footer-wave footer-animation "></div>
            </div>
            <div class="thu ">
                <a href='' class="he-btn ">SUPPORT OUR MISSOION </a>
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
    </section>

</body>

</html>