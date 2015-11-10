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
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/pure/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/pure/grids-responsive-min.css">
        <!--<![endif]-->
        <link rel="stylesheet" href="css/custom.css">
       <link rel="stylesheet" href="css/colors.css">
    </head>
    <body>
<?php
	createTopMenu();
?>
<div class="pure-g" id="navbar">
            <div class="pure-u-1-2 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2 active-tab" id="news-button"><div><i class="sj-icons-train"></i>SJ idag</div></div>
            <div class="pure-u-1-2 pure-u-sm-1-2 pure-u-md-1-2 pure-u-lg-1-2" id="work-button"><div><i class="sj-icons-heart"></i>Ditt arbete</div></div>

    </div>

<div class="pure-g" id="arrowbar">
        <div class="pure-u-sm-1-2 pure-u-1-2" id="left-arrow"><img src="img/green_arrow.png"></im></div>
    <div class="pure-u-sm-1-2 pure-u-1-2" id="right-arrow"><img src="img/green_arrow.png"class="hidden"></im></div>

</div>
<div id="sort-section">
    <div class="pure-g" id="news-sortbar">
            <div class="pure-u-1-2 pure-u-sm-1-2"><div id="news-sortButton">Sortera</div></div>
            <div class="pure-u-1-2 pure-u-sm-1-2">1234</div>
    </div>
    <div class="pure-g" id="work-sortbar">
            <div class="pure-u-1-2 pure-u-sm-1-2"><div id="work-sortButton">Sortera</div></div>
            <div class="pure-u-1-2 pure-u-sm-1-2"><div>1234</div></div>
    </div>
    <div class="pure-g" id="news-selectbar">
            <div class="pure-u-1 pure-u-sm-1"><form class="pure-form pure-u-1 pure-u-sm-1 pure-u-lg-1">
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
        <a class=" pure-button pure-button-primary fa-close" id="close-news-sort"></a>
    </fieldset>
</form></div>
    </div>

    <div class="pure-g" id="work-selectbar">
            <div class="pure-u-1 pure-u-sm-1"><form class="pure-form pure-u-1 pure-u-sm-1 pure-u-lg-1">
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
        <button class=" pure-button pure-button-primary fa-close"></button>
    </fieldset>
</form></div>
    </div>
</div>



    <!-- Content section -->
        <div class="pure-g" id="content">
            <div class="pure-u-1 pure-u-sm-1-2" id="news-content">
            <div class="pure-g pure-u-1">
                <button class="pure-u-5-5 pure-button pure-button-primary button-xl hidden"id="resetList-button" >Återställ listan</button>
                <?php addNewsList();
?>
            </div>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2" id="work-content">
                <div class="pure-g pure-u-1">
                <button class="pure-u-5-5 pure-button pure-button-primary button-xl hidden"id="resetList-button" >Återställ listan</button>
                <?php addWorkList();
?>
                    <div id="show-more-button" class="pure-g pure-u-lg-1"><button class="pure-u-5-5 pure-button button-xl">Visa fler</button></div>
                    <div id="show-less-button"><button class="pure-u-5-5 pure-button button-xl" >Visa färre</button></div>
            </div>
            </div>
        </div>

        <script src="js/vendor/jquery-1.11.3.min.js"></script>
       <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script> -->
        <script src="js/plugins.js"></script>
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
