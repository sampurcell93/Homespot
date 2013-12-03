<!DOCTYPE html>
<html>
    <head>
        <title>Spotted</title>
        <meta charset="UTF-8">
        <meta name="Copyright" content="Copyright 2013 Spotted" />
        <meta name="Author" content="Spotted" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
        <link href='stylesheets/screen.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header>
            <nav>
                <ul class='container tabs' data-group='main-pages'>
                    <li rel='contact'>Contact</li>
                    <li rel='help'>Help</li>
                    <li rel='blog'>Blog</li>
                    <li rel='team'>Team</li>
                    <li rel='about'>About</li>
                </ul>
            </nav>
        </header>
        <div id="main-pages">
            <div id="home">
                <div class='full-background main-color'>
                    <div class="container">
                        <section class='sexy-intro columns twelve'>
                            <h1>
                                <span>Be yourself. </span>
                                <span>Discover what's spotted.</span>
                            </h1>
                        </section>
                    </div>
                </div>
                <div class="container">
                    <section>
                        <div class='columns five share-what'>
                            <h2>Share what you've spotted</h2>
                            <p>
                                Spotted is a way to rediscover your surroundings. It's a way to get out of the house. It's a way to meet new people and discover new places.
                            </p>
                        </div>
                        <div class='offset two columns one'>&nbsp;</div>
                        <div class="columns four biglogo"></div>
                    </section>
                </div>
                <div class='full-background faded-color'>
                    <div class="container">
                        <section>
                            <div class="columns six iphone-mock"></div>
                            <div class="columns six offset-one align-middle">
                                <h2>Worry-free sharing</h2>
                                <p>Here's an opportunity to be yourself again. Spots are only visible for a short period of time, so you don't have to worry about what you share. Once it's expired, it's gone forever.</p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="container">
                    <section>
                        <div class="columns six offset-one">
                            <h2>Introducing: Bulletin</h2>
                            <p>The bulletin is where you go to get a brief look at what's spotted near you. Follow your friends or your favorite food truck to see what they're spotting.</p>
                        </div>
                        <div class="columns six offset-one">
                            <h2>Bring friends together</h2>
                            <p>Three of your friends have respotted a party. Join them. 
                            It doesn't get much easier than that. Well, at least until we invent teleporting.</p>
                        </div>
                    </section>
                </div>
            </div><!-- END HOME PAGE -->
            <?php require_once("about.php"); ?>
            <?php require_once("team.php"); ?>
            <?php require_once("contact.php"); ?>
            <?php require_once("help.php"); ?>
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
