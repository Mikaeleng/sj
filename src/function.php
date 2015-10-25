<?php
//      Top menu elements


function addTopMenu(){
        ?>
<div class="pure-g" id="top-menu">
    <div class="pure-u-sm-1-2 pure-u-1-2">
        <span>MENY</span>
    </div>
    <div class="pure-u-sm-1-2 pure-u-1-2">
        <span>SÖK</span>
    </div>
</div>
<?php
}

function createTopMenu(){
        ?>
<div class="pure-g" id="top-nav">
    <div class="pure-u-1-3 pure-u-sm-1-3">
       <span>MENY</span>
    </div>
    <div class="pure-u-1-3 pure-u-sm-1-3">
        <img src="assets/img/sjlogga.png"></im>
    </div>
    <div class="pure-u-1-3 pure-u-sm-1-3">
        <span>SÖK</span>
    </div>
</div>
<?php
}

// main navigation
function createMainNav(){
 ?>
<div class="pure-g" id="main-nav">

</div>
<?php
}

function addNewsList(){
$news       = "NYHET";
$blog       = "BLOG";
$kpi        = "NYCKELTAL";
$subscribe  = "ETIKETT";
$train      = "PÅ TÅGEN";
    ?>
<div class="pure-g cat">
    <div class="pure-u-sm-1-5 pure-u-1-5 cat-news"><?php echo $news; ?></div>
       <div class="pure-u-sm-4-5 pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-1-4 pure-u-1-4 cat-blog"><?php echo $blog; ?></div>
       <div class="pure-u-sm-3-4 pure-u-3-4 cat-caption"> <span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-1-4 pure-u-1-4 cat-blog"><?php echo $blog; ?></div>
       <div class="pure-u-sm-3-4 pure-u-3-4 cat-caption"> <span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-1-5 pure-u-1-5 cat-news"><?php echo $news; ?></div>
       <div class="pure-u-sm-4-5 pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-7-24 pure-u-7-24 cat-kpi"><?php echo $kpi; ?></div>
       <div class="pure-u-sm-17-24 pure-u-17-24 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-7-24 pure-u-7-24 cat-train"><?php echo $train; ?></div>
       <div class="pure-u-sm-14-24 pure-u-14-24 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-7-24 pure-u-7-24 cat-subscribe"><?php echo $subscribe; ?></div>
       <div class="pure-u-sm-16-24 pure-u-16-24 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-1-5 pure-u-1-5 cat-news"><?php echo $news; ?></div>
       <div class="pure-u-sm-4-5 pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<?php
    /*$cat = array('news'=>'NYHET', 'blog' =>'BLOGG', 'kpi' => 'NYCKELTAL', 'subribe'=>'PRENUMERATION');
    for ($i = 1; $i <= 7; $i++) {
    ?>
<li class="pure-g cat cat-news">
                    <div class="pure-u-1-5">
                        <span><?php echo $cat[0];?></span>
                    </div>
                    <div class="pure-u-4-5">
                       <pre class="pure-u-1">Headline</pre>
                    </div>
                </li>
<?php
    }*/
    
}

function addWorkList(){
    ?>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link"><span>LÄNK</span></div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>

<?php
}
?>
