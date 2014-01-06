<!DOCTYPE html>
<html>
    <head>
        <title>Spotted</title>
        <meta charset="UTF-8">
        <meta name="Copyright" content="Copyright 2013 Spotted" />
        <meta name="Author" content="Spotted" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
        <link href='icomoon/style.css' rel='stylesheet' type='text/css'>
        <link href='stylesheets/screen.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header class='hidden-header'>
            <nav>
                <ul class='container tabs' data-group='main-pages'>
                    <li id='login' class='button clear-bg'><a href='#'>Log In</a></li>
                    <li id='spotted-header' rel='home'>Spotted</li>
                    <li rel='contact'>Contact</li>
                    <li rel='blog'>Blog</li>
                    <li rel='team'>Team</li>
                    <li rel='about'>About Spotted</li>
                    <!-- <li rel='help'>Help</li> -->
                </ul>
            </nav>
        </header>
        <div id="main-pages">
            <div id="home">
                <div class='full-background main-splash'>
                    <div class="container">
                        <h1 class='sexy-intro columns twelve'>
                                Tom <span class='accent'>spotted</span> <span class='js-spotted-object'>food truck</span>
                        </h1>
                    </div>
                </div>
                 <div class="container">
                    <section>
                        <div class="columns six offset-one">
                            <h2><i class='icon-heart pink'></i>Share what you've spotted</h2>
                            <p>Bulletin is where you go to get a brief look at what's spotted near you. Follow your friends or your favorite food truck to see what they're spotting.</p>
                        </div>
                        <div class="columns six offset-one">
                            <h2><i class='icon-user orange'></i>Bring friends together</h2>
                            <p>A few of your friends have respotted a party. Join them. 
                            It doesn't get much easier than that. Well, at least until we invent teleporting.</p>
                        </div>
                    </section>
                </div>
                <div class='full-background faded-color'>
                    <div class="container">
                        <div class="columns six iphone-mock"></div>
                        <div class="columns six offset-one align-middle">
                            <h2><i class='icon-alarm light'></i><strong>Worry-free sharing</strong></h2>
                            <p>
                                Here's an opportunity to be yourself again. Spots are only visible for a short period of time, so you don't have to worry about what you share. Once it's expired, it's gone forever.
                                <button class='learn-more strong'>Learn More</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class='container'>
                    <h2 class="center m30">Discover what's spotted.</h2>
                    <div class="columns six offset-three">
                        <a href='#'><img src='images/appstore.png' alt='Get Spotted on the App Store' /></a>
                    </div>
                    <div class="columns six">
                        <a href='#'><img src='images/googleplay.png' alt='Get Spotted on the Google Play  Store' /></a>
                    </div>
                </div>
            </div><!-- END HOME PAGE -->
            <?php require_once("about.php"); ?>
            <?php require_once("team.php"); ?>
            <?php require_once("blog.php"); ?>
            <?php require_once("help.php"); ?>
            <?php require_once("contact.php"); ?>
        </div>
        <footer class='container'>
            <nav class='bottomnav'>
                <ul class='columns eleven tabs' data-group='main-pages'>
                    <li rel='home'>Spotted</li>
                    <li rel='about'>About</li>
                    <li rel='team'>Team</li>
                    <li rel='blog'>Blog</li>
                    <li rel='help'>Help</li>
                    <li rel='contact'>Contact</li>
                </ul>
            </nav>
            <p class="copyright light">&#169; 2013 Spotted. Made in Cambridge, Massachusetts</p>
        </footer>
        <script type="text/javascript" src='http://code.jquery.com/jquery-1.10.2.min.js'></script>
        <script type="text/javascript" src='js/main.js'></script>
    </body>
</html>
