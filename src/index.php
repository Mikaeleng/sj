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
        <div class="pure-u-1 pure-u-sm-1">Startsida/</div>     
    </div>
        
        <!-- HOME.CSS file for styles -->
        
    
        <div class="" id="content">
            
            <div id="main">
                
            <div class="pure-u-1 pure-u-sm-1-2" id="news-panel">
                <div class="pure-g" id="personalize-feed">
        <div class="pure-u-1 pure-u-sm-1-5" id="headline"><p>SJ idag</p></div> 
        <div class="pure-u-1 pure-u-sm-4-5" id="feed-focus"><select>
            <option>Din roll</option>
            <option>Hela organisationen</option>
            </select> 
        </div>    
    </div>
                <div id="feed-sorting">
                    <form class="pure-form pure-u-1 pure-u-sm-1 pure-u-lg-1">
    <fieldset>
        <label for="all">
        <input type="radio" name="sorting" id="all" checked>
            Alla
        </label>
        <label for="desc">
        <input type="radio" name="sorting" id="desc" >
            Fallande (A-Ö)
        </label>
        <label for="asc">
        <input type="radio" name="sorting" id="asc" >
            Stigande (Ö-A)
        </label>
        <label for="popular">
        <input type="radio" name="sorting" id="popular" >
            Mest lästa
        </label>
        <label for="popular">
        <input type="radio" name="sorting" id="popular" >
            Din roll
        </label>
       <!-- <a class=" pure-button pure-button-primary fa-close" id="close-news-sort"></a>-->
    </fieldset>
</form>
                </div>
                <div id="news-feed">
                    
            <!-- level 1 items -->
                    <div class="pure-g" id="level-1-items">
                        <div class="pure-u-1 pure-u-lg-1-2">
                        <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">SJ-reklam vinnare på Roygalan</div>
                            </div>
                        </div>
                        <div class="pure-u-1 pure-u-lg-1-2">
                        <div class="item">
                            <img class="pure-img" src="img/wall1.jpg"></im>
                            <div class="news-headline">Medarbetarenkäten: Snart dags för dialog</div>
                            </div>
                        </div>
                    </div>
            
            <!-- level 2 items -->
                    <div class="pure-g" id="level-2-items">
                        <div class=" pure-u-1-3 pure-u-lg-1-3">
                        <div>
                            <div class="item">
                                <img class="pure-img" src="img/wall2.jpg"></im>
                                <div class="news-headline">Alla för Alla</div>
                            </div>    
                        </div>
                        </div>
                        <div class=" pure-u-1-3 pure-u-lg-1-3" id="kpi">
                                <div class="news-headline">Biljettförsäljning +3%</div>  
                        </div>
                        <div class=" pure-u-1-3 pure-u-lg-1-3">
                        <div>
                            <div class="item">
                                <img class="pure-img" src="img/wall2.jpg"></im>
                                <div class="news-headline">Mer än två veckor med SJ Challenge</div>
                            </div>
                        </div>
                        </div>
                    </div>

            <!-- level 3 items -->
                    <div class="pure-g" id="level-3-items">
                        <div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall3.jpg"></im>
                            <div class="news-headline pure-u-lg-2-3">Kampanj på vinterresor</div>
                            </div>
                        </div>
                        <div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall3.jpg"></im>
                            <div class="news-headline pure-u-lg-2-3">Fortsatt stark utveckling för SJ</div>
                            </div>
                        </div>
<div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall3.jpg"></im>
                            <div class="news-headline pure-u-lg-2-3">Ny Platskontrollchef i Hagalunddepån</div>
                            </div>
                        </div>
<div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall3.jpg"></im>
                            <div class="news-headline pure-u-lg-2-3">Tydligare processer i verksamheten</div>
                            </div>
                        </div>
<div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall3.jpg"></im>
                            <div class="news-headline pure-u-lg-2-3">Veckobrev41</div>
                            </div>
                        </div>
<div class=" pure-u-1 pure-u-lg-1-2">
                            <div class="item">
                            <img class="pure-img" src="img/wall3.jpg"></im>
                            <span class="news-headline pure-u-lg-2-3">Nya rutiner för dokumenthantering</span>
                            </div>
                        </div>
                    </div>
<!--        End of news-feed-rows -->
            </div>
<!--        End of news-feed -->
</div>
    <div class="pure-u-1 pure-u-sm-1-3" id="work-panel">
        <!-- read panel state 1 -->
        <div class="panel" id="read-panel">
            <div class="work-panel-header pure-g">
                <div class=" pure-u-7-12"><span class="fa-heart-o"></span>Ditt arbete</div>
                <div class="pure-u-2-5">redigera listan</div>
            </div>
            <div class="read-list">
                <?php readList(); ?>
            </div>
            <div class="pure-g"><a class="pure-button pure-u-1">Visa fler</a>
        </div>
    </div>
    <!-- edit panel state 2 -->
        <div class="panel" id="edit-panel">
            <div class="work-panel-header pure-g">
                <div class="pure-u-1-5">Lägg till</div>
                <div class=" pure-u-6-12"><span class="fa-heart-o"></span>Ditt arbete</div>
                <div class="pure-u-1-5">Stäng</div>
            </div>
            <div id="edit-list">
                <?php editList();?>
            </div>
            <div class="pure-g"><a class="pure-button pure-u-1">Visa fler</a>
        </div>
        </div>
        
         <!-- extended panel state 3 -->
        <div class="panel" id="extended-panel">
            <div class="work-panel-header pure-g">
                <div class=" pure-u-7-12"><span class="fa-heart-o"></span>Ditt arbete</div>
            </div>
            <div id="extended-list" class="pure-g">
                <?php extendedList();?>
                
            </div>
            <div class="pure-g " id="extended-button"><a class="pure-button pure-u-1-5">Visa färre</a>
        </div>
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
