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
            <a class="text-logo-catbot" href="/">CatBot</a>
            <div class="navbar-catbot-menu">
                <a class="menu-commands" href="/commands">Commands</a>
                <a class="menu-contact" href="/contact">Contact</a>
            </div>
        </div>
        <div class="navbar-catbot-right">
            <div class="navbar-catbot-user">
                <a class="user-box user-login" href="/login">Login</a>
                <a class="user-box user-register" href="/register">Register</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="box login-pages">
            <img src="../assets/images/logoCatBot.png">
            <h3 class="text-login-pages">Login</h3>
            <form action="../includes/catLogin.php" method="post">
                <div class="form-login">
                    <label class="label-login" for="username">Username</label>
                    <input class="input-login" type="text" name="username" id="username" required>
                </div>
                <div class="form-login">
                    <label class="label-login" for="password">Password</label>
                    <input class="input-login" type="password" name="password" id="password" required>
                </div>
                <?php if (isset($_GET['error'])) { ?>
                <div class="form-login">
                    <p class="show-login-error"><?php echo $_GET['error']; ?></p>
                </div>
                <?php } ?>
                <div class="form-button-login">
                    <button class="button-login" type="submit" name="masuk">Go</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>