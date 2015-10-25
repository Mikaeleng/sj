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
       <div class="pure-u-sm-4-5 pure-u-4-5 cat-caption"><span>SJ-reklam vinnare på Roygalan</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-1-4 pure-u-1-4 cat-blog"><?php echo $blog; ?></div>
       <div class="pure-u-sm-3-4 pure-u-3-4 cat-caption"> <span>Alla för Alla</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-1-4 pure-u-1-4 cat-blog"><?php echo $blog; ?></div>
       <div class="pure-u-sm-3-4 pure-u-3-4 cat-caption"> <span>Mer än två veckor med SJ Challenge </span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-1-5 pure-u-1-5 cat-news"><?php echo $news; ?></div>
       <div class="pure-u-sm-4-5 pure-u-4-5 cat-caption"><span>Medarbetarenkäten: Snart dags för dialog</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-7-24 pure-u-7-24 cat-kpi"><?php echo $kpi; ?></div>
       <div class="pure-u-sm-17-24 pure-u-17-24 cat-caption"><span>Biljettförsäljning +3%</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-7-24 pure-u-7-24 cat-train"><?php echo $train; ?></div>
       <div class="pure-u-sm-14-24 pure-u-14-24 cat-caption"><span>Kampanj på vinterresor</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-7-24 pure-u-7-24 cat-subscribe"><?php echo $subscribe; ?></div>
       <div class="pure-u-sm-16-24 pure-u-16-24 cat-caption"><span>Fortsatt stark utveckling för SJ</span></div>
</div>
<div class="pure-g cat">
    <div class="pure-u-sm-1-5 pure-u-1-5 cat-news"><?php echo $news; ?></div>
       <div class="pure-u-sm-4-5 pure-u-4-5 cat-caption"><span>Ny Platskontrollchef i Hagalunddepån</span></div>
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
       <div class="pure-u-4-5 work-caption"><span>Brand Portal </span></div>
</div>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Cognos</span></div>
</div>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Förmånståget</span></div>
</div>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>HR-portalen</span></div>
</div>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Lösenordsverktyget</span></div>
</div>
<div class="pure-g pure-u-lg-1 work">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Newsdesk</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Om oss (din avdelning)</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Omvärldsbevakningsportalen</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Outlook via SJ Distans</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Presentera SJ</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Previa fd Manpower Hälsopartner</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Proceedor</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Service Desk</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>SJ Distans</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>SJ Dokumentcentral</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>SJ Projects</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>SJ Verksamhetskarta (processkarta)</span></div>
</div>
<div class="pure-g pure-u-lg-1 work hidden">
    <div class="pure-u-1-5 pure-u-lg-2-24 work-link">LÄNK</div>
       <div class="pure-u-4-5 work-caption"><span>Självbetjäningsportal Volvo IT</span></div>
</div>

<?php
}
?>
