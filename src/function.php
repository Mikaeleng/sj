<?php
//      Top menu elements
function addTopMenu(){
        ?>
<div class="pure-g" id="top-menu">
    <div class="pure-u-1-2">
        <span>MENY</span>
    </div>
    <div class="pure-u-1-2">
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

    ?>
<div class="pure-g cat">
    <div class="pure-u-1-5 cat-news">NYHET</div>
       <div class="pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-1-4 cat-blog">BLOG</div>
       <div class="pure-u-3-4 cat-caption"> <span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-1-4 cat-blog">BLOG</div>
       <div class="pure-u-3-4 cat-caption"> <span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-1-5 cat-news">NYHET</div>
       <div class="pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-7-24 cat-kpi">NYCKELTAL</div>
       <div class="pure-u-17-24 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-7-24 cat-train">PÅ TÅGEN</div>
       <div class="pure-u-14-24 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-7-24 cat-subscribe">ETIKETT</div>
       <div class="pure-u-16-24 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-1-5 cat-news">NYHET</div>
       <div class="pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
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
<div class="pure-g cat">
    <div class="pure-u-1-5 cat-news">LÄNK</div>
       <div class="pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-1-5 cat-news">LÄNK</div>
       <div class="pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-1-5 cat-news">LÄNK</div>
       <div class="pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-1-5 cat-news">LÄNK</div>
       <div class="pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-1-5 cat-news">LÄNK</div>
       <div class="pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-1-5 cat-news">LÄNK</div>
       <div class="pure-u-4-5 cat-caption"><span>Rubrik lorem ipsum dolor sit amet consectetuer</span></div>
</div>
<?php
}
?>
