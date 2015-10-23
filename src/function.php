<?php
//      Top menu elements
function addTopMenu(){
        ?>
<div class="pure-g" id="top-menu">
    <div class="pure-u-1-2">
        MENY
    </div>
    <div class="pure-u-1-2">
        SÖK
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
<li class="pure-g cat">
    <div class="pure-u-1-3 cat-news">
        <span>NYHET</span>
    </div>
    <div class="pure-u-1-4">
       <pre class="pure-u-1">Headline</pre>
    </div>
</li>
<li class="pure-g cat">
    <div class="pure-u-3-4 cat-blog">
        <span>BLOG</span>
    </div>
    <div class="pure-u-2-3">
       <pre class="pure-u-1">Headline</pre>
    </div>
</li>
<li class="pure-g cat">
    <div class="pure-u-1-5 cat-news">
        <span>NYHET</span>
    </div>
    <div class="pure-u-4-5">
       <pre class="pure-u-1">Headline</pre>
    </div>
</li>
<li class="pure-g cat">
    <div class="pure-u-1-5 cat-subscribe">
        <span>PRENUMERATION</span>
    </div>
    <div class="pure-u-4-5">
       <pre class="pure-u-1">Headline</pre>
    </div>
</li>
<li class="pure-g cat">
    <div class="pure-u-1-5 cat-kpi">
        <span>NYCKELTAL</span>
    </div>
    <div class="pure-u-4-5">
       <pre class="pure-u-1">Headline</pre>
    </div>
</li>
<li class="pure-g cat">
    <div class="pure-u-1-5 cat-news">
        <span>NYHET</span>
    </div>
    <div class="pure-u-4-5">
       <pre class="pure-u-1">Headline</pre>
    </div>
</li>
<li class="pure-g cat">
    <div class="pure-u-1-5 cat-train">
        <span>PÅ TÅGEN</span>
    </div>
    <div class="pure-u-4-5">
       <pre class="pure-u-1">Headline</pre>
    </div>
</li>

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
?>
