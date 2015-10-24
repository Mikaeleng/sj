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
    </head>
    <body>
<?php
	addTopMenu();
?>
    <div class="pure-g" id="top-tabs">
        <div class="pure-u-sm-12-24 pure-u-1-2 active-tab" id="news-tab">
        <span><i class="sj-icons-train"></i>SJ idag</span>
        </div>
        <div class="pure-u-sm-11-24 pure-u-1-2" id="work-tab">
        <span><i class="sj-icons-heart"></i>Ditt arbete</span>
            <div class="fa-cog">redigera</div>
        </div>  
    </div>
        <div class="pure-g arrow-row">
            <div class="pure-u-sm-1-2 pure-u-1-2" id="left-arrow"><img src="img/green_arrow.png"></im></div>
        <div class="pure-u-sm-1-2 pure-u-1-2" id="right-arrow"><img src="img/green_arrow.png"class="hidden"></im></div>
        </div>  
    <div class="pure-g" id="sort-menu">
        <div class="pure-u-sm-1-5 pure-u-1-5" id="button-sort">Sortera</div>
        <div class="pure-u-sm-4-5 pure-u-4-5" id="button-pagination">
            <i>< 1 2 3 4 ></1></i></div>
    </div>
<div class="pure-g hidden" id="sort-items">
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
        <button class=" pure-button pure-button-primary fa-close"></button>
    </fieldset>
</form>
</div>
    <div class="pure-g" id="content">
        <div class="pure-u-1 pure-u-sm-1-2" id="news">
            <div class="pure-g pure-u-1">
                <button class="pure-u-5-5 pure-button pure-button-primary button-xl hidden"id="resetList-button" >Återställ listan</button>
                <?php addNewsList();
?>
            </div>
        </div>

       <div class="pure-u-1 pure-u-1-2 pure-u-lg-1-2 hidden" id="work">
            <?php addWorkList();?>
        </div>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
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
