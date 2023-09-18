<?php
require('./connection_tourism.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/mainstyle.css">
    <link rel="stylesheet" href="./CSS/contact_form.css">
    <script src="https://kit.fontawesome.com/f73d1228fc.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>


        <div class="navigation">
            <div class="logo">
                <i class="fa-solid fa-plane"></i>
                <span>Flyhigh</span>
            </div>
            <div class="nav-list">
                <ul class="first-ul">
                    <li class="drop-btn"><a class="anchor" href="index.php">home</a>
                        <div class="drop-down">
                            <ul class="drop">
                                <li class="list-in"><a class="inner-a" href="#">home-1</a></li>
                                <li><a class="inner-a" href="#">home-2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="anchor" href="#">about us</a></li>
                    <li class="drop-btn"><a class="anchor" href="#">tour package</a>
                        <div class="drop-down">
                            <ul class="drop">
                                <li class="list-in"><a class="inner-a" href="#">single tour</a></li>
                                <li><a class="inner-a" href="#">family tour</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="drop-btn"><a class="anchor" href="blogs.php">blog</a>
                        <div class="drop-down">
                            <ul class="drop">
                                <li class="list-in"><a class="inner-a" href="blogs.php">blog-1</a></li>
                                <li class="list-in"><a class="inner-a" href="blogs.php">blog-2</a></li>
                                <li><a class="inner-a" href="#">blog-3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="drop-btn"><a class="anchor" href="gallery.php">gallery</a>
                        <div class="drop-down">
                            <ul class="drop">
                                <li class="list-in"><a class="inner-a" href="gallery.php">Indian tours</a></li>
                                <li><a class="inner-a" href="gallery.php">Foreign tours</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="anchor" href="contact_us_tourism.php">contact us</a></li>
                </ul>
            </div>
            <div class="search-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="mobile-menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>

    <main>
        <div class="form">
            <div class="content1">
                <h1>Contact Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quae! Illo incidunt optio tempora itaque eum, nisi cumque nihil modi.</p>
            </div>
            <div class="container">
                <div class="contactinfo">
                    <div class="box">
                        <div class="icons"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>#334 , Yamuna Nagar <br> xyz locality <br> snowfall building</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icons"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>itikalamba@12345gmail.com</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icons"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>9896677554</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="" method="POST">
                        <h1>Send Message</h1>
                        <div class="inputbox">
                            <input type="text" required="required" name="name">
                            <span>Full Name</span>
                        </div>
                        <div class="inputbox">
                            <input type="text" required="required" name="email">
                            <span>Email</span>
                        </div>
                        <div class="inputbox">
                            <input type="text" required="required" name="phone">
                            <span>Phone Number</span>
                        </div>
                        <div class="inputbox">

                            <input type="text" name="msg" class="text">
                            <!-- <span>Type your Message</span> -->
                        </div>
                        <div class="inputbox">
                            <input type="submit" name="submit" value="send">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </main>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $message = $_POST['msg'];
        $insertquery = "insert into contact(Name,Email,phone,message)values('$name','$Email','$Phone','$message')";
        $res = mysqli_query($con, $insertquery);
        if ($res) {
    ?>
            <script>
                alert("data inserted properly");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("data not inserted");
            </script>
    <?php
        }
    }

    ?>
<div class="foot">
    <footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icons">
            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Gallery</a></li>
            <li><a href="index.php">Contact Us</a></li>
            <li><a href="index.php">Blogs</a></li>
        </ul>
        <p>&copy;2022||Flyhigh||Tourism-service||All Rights reversed.</p>
    </footer>
</div>
</body>

</html>