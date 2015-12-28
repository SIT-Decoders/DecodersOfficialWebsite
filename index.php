<!DOCTYPE html>
<html>
<head>
    <title>Decoders Home</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <!--[if lte IE 8]>
    <script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/style-xlarge.css"/>
    </noscript>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
</head>
<body>
<header id="header" class="skel-layers-fixed" style="background-color:khaki">
    <h1><a href="#"><img src="images/decoders3021.jpg">&nbsp;SIT DECODERS</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Contests</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Bulletin</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="login.php" class="button special">
                    <?php
                        if(isset($_SESSION['username']) && isset($_SESSION['password']))
                            echo $_SESSION['username'];
                        else
                            echo "MEMBER LOGIN"
                    ?>
                </a></li>
        </ul>
    </nav>
</header>
<section id="banner">
    <div class="inner">
        <img src="images/decoders200141.jpg" align="center"
             style="border: medium solid black;border-radius: 5px">
        <br><br>

        <h2>Welcome to Decoders Online</h2>
        <ul class="actions">
            <li><a href="#" class="button big special">Events</a></li>
            <li><a href="#" class="button big special">Sessions</a></li>
        </ul>
    </div>
</section>
<footer id="footer">
    <div class="container">
        <div class="row double">
            <div class="6u">
                <div class="row collapse-at-2">
                    <div class="6u">
                        <h3>Decoders Programming Club</h3>
                        <ul class="alt">
                            <li><a href="#">Membership and Recruitment</a></li>
                            <li><a href="#">Second Year Members</a></li>
                            <li><a href="#">Third Year Members</a></li>
                            <li><a href="#">Club Heads and final year members</a></li>
                        </ul>
                    </div>
                    <div class="6u">
                        <h3>Information</h3>
                        <ul class="alt">
                            <li><a href="#"> Internal Projects </a></li>
                            <li><a href="#"> Workshop Information </a></li>
                            <li><a href="#"> Member benifits </a></li>
                            <li><a href="#"> Achievements </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="6u">
                <h2>Follow us on</h2>
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                    <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                </ul>
            </div>
            <div align="center">
                <ul class="copyright">
                    <li>&copy; SIT IEEE Decoders. All rights reserved.</li>
                    <li>Website: Decoders WebApp Team</li>
                    <li><a href="#"> Permission and letters </a></li>
                    <li>UX Powered by: <a href="http://templated.co">TEMPLATED</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
