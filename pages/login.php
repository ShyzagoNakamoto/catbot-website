<?php
    include_once("../includes/catLogin.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CatBot.</title>
    <meta name="title" content="CatBot.">
    <meta name="description" content="UAS Website Programming.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://catbot.io/">
    <meta property="og:title" content="CatBot.">
    <meta property="og:description" content="UAS Website Programming.">
    <meta property="og:image" content="/assets/img/CatBot-Icon-FaceBook.png">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://catbot.io/">
    <meta property="twitter:title" content="CatBot.">
    <meta property="twitter:description" content="UAS Website Programming.">
    <meta property="twitter:image" content="/assets/img/CatBot-Icon.png">
    <link rel="shortcut icon" href="/assets/img/CatBot-Icon-Twitter.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="../assets/css/catbot.style.css" rel="stylesheet">
    <link href="../assets/css/catbot.mobile.css" rel="stylesheet">
    <link href="../assets/css/fonts/comfortaa/Comfortaa-VariableFont_wght.ttf" rel="stylesheet">

    <!-- JS -->
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/jquery/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar-catbot">
        <div class="navbar-catbot-left">
            <a class="text-logo-catbot" href="">CatBot</a>
            <div class="navbar-catbot-menu">
                <a class="menu-commands" href="http://localhost/Main/commands/">Commands</a>
                <a class="menu-contact" href="http://localhost/Main/contact/">Contact</a>
            </div>
        </div>
        <div class="navbar-catbot-right">
            <div class="navbar-catbot-user">
                <a class="user-box user-login" href="">Login</a>
                <a class="user-box user-register" href="">Register</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="box login-pages">
            <img src="../assets/images/logoCatBot.png">
            <h1>Login</h1>
            <form action="../includes/catLogin.php" method="post" class="">
                <label for="username">Username</label>
                <input class="input-form-username" type="text" name="username" id="username" placeholder="catbot"
                    required>
                <label for="password">Password</label>
                <input class="input-form-password" type="text" name="password" id="password" required>
                <button type="submit" name="masuk">Go</button>
            </form>
        </div>
    </div>

    <footer>
        <p class="footer-catbot">&copy; Copyright CatBot <strong>2021</strong>.</p>
    </footer>
</body>

</html>