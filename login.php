<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
session_commit();
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Member Login
    </title>
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
        </ul>
    </nav>
</header>
<!-- You code begins here -->
<div align="center">
    <br>

    <h1>Decoders Members Login</h1>
</div>
<div>
    <p>
        <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (!empty($username) && !empty($password)) {
                if ($username == 'DECAMBUJ12') {
                    if ($password == 'Alchemist') {
                        $message = "GoHeader";
                    } else {
                        $message = "<h3 style='color: red' align='center'>Wrong Password</h3>";
                    }
                } else {
                    $message = "<h3 style='color: red'  align='center'>Wrong username</h3>";

                }
            } else {
                $message = "<h3 style='color:red'  align='center'>Fields Empty</h3>";
            }
        }
        ?>
        <!-- Separating the logic for efficient and error free header transfers -->
        <?php
        if ($message == "GoHeader") {
            header('Location :dashboard.php');
            exit;
        } else
            echo $message;
        ?>
    </p>
</div>
<div id="loginform" align="center" about="The login form">
    <form method="post" action="login.php" style="width: 50%">
        <table style="border: solid black medium; border-radius: 10px">
            <tr>
                <td>
                    Enter Username provided to you
                    <input type="text" name="username" placeholder="Provided Username">
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    Type the password. For changing your password ,in case you have forgotten, send mail request to one of DEC Heads.
                    <input type="password" name="password" placeholder="Provided Password">
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Login" class="big button" align="center">
                </td>
            </tr>
        </table>
    </form>
</div>
<!-- Your Code Ends here -->
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
