<?php 
include_once "function.php";
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="SJ-Sans/sj-sans.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="css/pure/pure-min.css">
        <link rel="stylesheet" href="css/custom_12_grid.css">
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/pure/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/pure/grids-responsive-min.css">
        <!--<![endif]-->
        <link rel="stylesheet" href="css/framework.css">
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
<?php
	topMenu();
?>
        <!-- FRAMEWORK.CSS for styles -->
        
    <div class="pure-g" id="header">
        <div class="pure-u-1 pure-u-sm-1"></div>     
    </div>
        
        <!-- HOME.CSS file for styles -->
        
    <div class="pure-g">
        <div class="pure-u-1 pure-u-sm-1-2" id="headline"><p>SJ idag</p></div> 
        <div class="pure-u-1 pure-u-sm-1-2" id="feed-focus"><select>
            <option>Din roll</option>
            <option>Hela organisationen</option>
            </select> 
        </div>    
    </div>
        <div class="" id="content">
            <div id="main">
            <div class="pure-u-1 pure-u-sm-1-2" id="news-panel">
                <div id="feed-sorting">
                </div>
                <div id="news-feed">
                    
            <!-- level 1 items -->
                    <div class="pure-g" id="level-1-items">
                        <div class="pure-u-1 pure-u-lg-1-2">
                        <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">Rubrik</div>
                            </div>
                        </div>
                        <div class="pure-u-1 pure-u-lg-1-2">
                        <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">Rubrik</div>
                            </div>
                        </div>
                    </div>
            
            <!-- level 2 items -->
                    <div class="pure-g" id="level-2-items">
                        <div class=" pure-u-1-3 pure-u-lg-1-3">
                        <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">Rubrik</div>
                            </div>
                        </div>
                        <div class=" pure-u-1-3 pure-u-lg-1-3">
                        <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">Rubrik</div>
                            </div>
                        </div>
                        <div class=" pure-u-1-3 pure-u-lg-1-3">
                        <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">Rubrik</div>
                            </div>
                        </div>
                    </div>

            <!-- level 3 items -->
                    <div class="pure-g" id="level-3-items">
                        <div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">1Rubrik</div>
                            </div>
                        </div>
                        <div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">2Rubrik</div>
                            </div>
                        </div>
<div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">3Rubrik</div>
                            </div>
                        </div>
<div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">4Rubrik</div>
                            </div>
                        </div>
<div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">5Rubrik</div>
                            </div>
                        </div>
<div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">6Rubrik</div>
                            </div>
                        </div>
                    </div>
<!--        End if news-feed-rows -->
            </div>
<!--        End if news-feed -->
</div>
            <div class="pure-u-1 pure-u-sm-1-2" id="work-panel"></div>
        </div>
    </div>
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
       <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script> -->
        <script src="js/plugins.js"></script>
        <script src="js/widgets.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!--    <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
