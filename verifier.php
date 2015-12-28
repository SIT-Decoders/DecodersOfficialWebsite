<!DOCTYPE html>
<html>
<head>
    <title>
        Verifying
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
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$location = "login.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (!empty($username) && !empty($password)) {
        if ($username == 'DECAMBUJ12') {
            if ($password == 'Alchemist') {

                echo "<h2>Correct Username and Password</h2>";
            } else {
                echo "<h2 style='color: red'>Wrong Password</h2>";
            }

        } else {
            echo "<h2 style='color: red'>Wrong username</h2>";

        }
    } else {
        echo "<h2 style='color:red'>Fields Empty</h2>";
    }

}
?>
</body>
</html>
